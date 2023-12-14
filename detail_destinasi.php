<?php
session_start();
include "public/config/connection.php"
?>

<?php
$envFilePath = '.env';

// Baca isi file .env
if (file_exists($envFilePath)) {
    $envFile = file_get_contents($envFilePath);

    // Pisahkan setiap baris
    $envLines = explode("\n", $envFile);

    foreach ($envLines as $envLine) {
        // Pisahkan nama variabel dan nilainya
        list($envVar, $envValue) = explode('=', $envLine, 2);

        // Atur variabel lingkungan
        $_ENV[trim($envVar)] = trim($envValue);
    }
}

// Gunakan variabel lingkungan seperti biasa
$facebookAppId = $_ENV['APPID'];

?>

<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title>Destinasi</title>
    <?php
    include "public/layouts/head.php";
    ?>

    <style>
        .comment {
            word-wrap: break-word;
            padding: 10px;
            margin-bottom: 15px;
            background-color: #f9f9f9;
            border-radius: 5px;
        }

        .comment-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 10px;
        }

        .comment h6 {
            text-align: left !important;
            margin: 0;
        }

        .comments-section {
            max-height: 300px;
            overflow-y: auto;
            padding: 10px;
            max-width: 100%;
            border-radius: 5px;
        }

        .no-comment-message {
            font-style: italic;
            color: #888;
        }

        .kotak-komen {
            margin-left: 150px;
            margin-bottom: 20px;
        }

        .love-button {
            cursor: pointer;
            font-size: 1.5em;
        }

        .love-button.full {
            color: #e74c3c;
            /* Warna ikon love penuh */
        }

        .love-button.empty {
            color: lightgray;
            /* Warna ikon love kosong */
        }

        .lope {
            margin-top: -1px;
        }

        /* Gaya tombol Facebook */
        .custom-facebook-button {
            background-color: #1877f2;
            /* Warna biru Facebook */
            color: #ffffff;
            /* Warna teks putih */
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        /* Efek hover pada tombol */
        .custom-facebook-button:hover {
            background-color: #115293;
            /* Warna biru yang lebih gelap saat dihover */
        }

        /* Gaya untuk menyembunyikan border pada iframe */
        .share {
            border: none;
        }
    </style>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v18.0&appId=<?php echo $facebookAppId ?>" nonce="IOz3S1OQ"></script>
</head>

<body>
    <div class="page">
        <header class="section page-header">
            <!-- RD Navbar-->
            <div class="rd-navbar-wrap">
                <nav class="rd-navbar rd-navbar-corporate" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="106px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
                    <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
                    <?php
                    include "public/layouts/header.php";
                    ?>
                    <div class="rd-navbar-main-outer">
                        <div class="rd-navbar-main">
                            <div class="rd-navbar-nav-wrap">
                                <!-- RD Navbar Nav-->
                                <ul class="rd-navbar-nav">
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="index.php">Home</a>
                                    </li>
                                    <li class="rd-nav-item active"><a class="rd-nav-link" href="about.php">About</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="kategori.php">Kategori</a>
                                    </li>
                                    <li class="rd-nav-item"><a class="rd-nav-link" href="daerah.php">Daerah</a>
                                    </li>
                                    <?php
                                    if (isset($_SESSION["username"])) { ?>
                                        <li class="dropdown rd-nav-item">
                                            <a href="#" class="dropdown-toggle rd-nav-link" data-toggle="dropdown">
                                                <?php echo $_SESSION["username"] ?>
                                                <b class="caret"></b>
                                            </a>
                                            <ul class="dropdown-menu">
                                                <li><a href="logout.php">Logout</a></li>
                                            </ul>
                                        </li>
                                    <?php } else { ?>
                                        <li class="rd-nav-item"><a class="rd-nav-link" href="login.php">Login</a>
                                        </li>
                                    <?php }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>

        <!-- Breadcrumbs -->
        <?php
        $query1 = mysqli_query($connect, "SELECT * FROM traveling as t 
        join kategori as k on t.id_kategori = k.id_nama_kategori 
        join daerah as d on t.id_daerah = d.id_nama_daerah
        WHERE t.id = '$_GET[id]'");
        $data1 = mysqli_fetch_array($query1);
        ?>
        <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title"><?php echo $data1['nama_tempat'] ?></h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active"><?php echo $data1['nama_tempat'] ?></li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(public/assets/images/raja.jpg);"></div>
            </div>
        </section>

        <!-- Why choose us-->
        <section class="section section-sm section-first bg-default text-md-left">
            <div class="container">
                <div class="row row-50 justify-content-center align-items-xl-center">
                    <div class="col-md-10 col-lg-5 col-xl-6 gambar-travel">
                        <img src="admin/pages/travel/<?php echo $data1['gambar'] ?>" alt="" width="519" height="564" />
                        <?php
                        if (isset($_SESSION['username'])) {
                            $userId = $_SESSION['username'];
                        ?> <div class="row lope">
                                <div class="col-md-1">
                                    <?php
                                    // Pastikan $_GET['id'] telah diatur sebelum menggunakannya
                                    if (isset($_GET['id'])) {
                                        $travelId = $_GET['id'];

                                        // Mengambil ID pengguna berdasarkan username
                                        $result_user = mysqli_query($connect, "SELECT id_nama_user FROM user WHERE username_user = '$userId'");
                                        $row_user = mysqli_fetch_assoc($result_user);
                                        $id_user = $row_user['id_nama_user'];

                                        // Set your travel article ID here
                                        $query = "SELECT * FROM user_like WHERE id_travel_like = $travelId AND id_user_like = $id_user";
                                        $result = mysqli_query($connect, $query);

                                        if (mysqli_num_rows($result) > 0) {
                                            $iconClass = '<div class="love-button full"><i class="fas fa-heart"></i></div>';
                                        } else {
                                            $iconClass = '<div class="love-button empty"><i class="fas fa-heart kosong"></i></div>';
                                        }

                                        echo '<div class="like-button" data-travel-id="' . $travelId . '" data-user-id="' . $id_user . '">';
                                        echo $iconClass;
                                        echo '</div>';

                                    ?>
                                </div>
                                <div class="angka_lope mt-2">
                                    <?php
                                        $travel = mysqli_query($connect, "SELECT COUNT(id_user_like) AS total_likes FROM user_like WHERE id_travel_like = $travelId");
                                        $travelLikes = mysqli_fetch_assoc($travel);
                                    ?>
                                    <p><?php echo $travelLikes['total_likes'] ?></p>
                                </div>
                                <iframe class="mt-3" src="https://www.facebook.com/plugins/share_button.php?href=https%3A%2F%2Fcodeverseindonesia.tech%2Fhealing_yuk%2Fdetail_destinasi.php%3Fid%3D%3C%3Fphp%20echo%20%24data1['id']%3F%3E&layout&size&appId=745845450911507&width=89&height=20" width="100" height="100" style="border:none;overflow:hidden;margin-left:10px;" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
                            </div>
                    <?php
                                    } else {
                                        echo '<p>Invalid travel ID.</p>';
                                    }
                                } else {
                                    echo '<p><a href="login.php">Login<a> untuk menyukai dan share artikel</p>';
                                }
                    ?>
                    </div>
                    <div class="col-md-10 col-lg-7 col-xl-6">
                        <h1 class="text-spacing-25 font-weight-normal title-opacity-9">Selamat Datang di <?php echo $data1['nama_tempat'] ?></h1>
                        <!-- Bootstrap tabs-->
                        <div class="tabs-custom tabs-horizontal tabs-line" id="tabs-4">
                            <!-- Nav tabs-->
                            <ul class="nav nav-tabs">
                                <li class="nav-item" role="presentation"><a class="nav-link active" href="#tabs-4-1" data-toggle="tab">Deskripsi</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-2" data-toggle="tab">Fasilitas</a></li>
                                <li class="nav-item" role="presentation"><a class="nav-link" href="#tabs-4-3" data-toggle="tab">HTM</a></li>
                            </ul>
                            <!-- Tab panes-->
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-4-1">
                                    <p><?php echo $data1['deskripsi'] ?></p>
                                </div>
                                <div class="tab-pane fade show" id="tabs-4-2">
                                    <p><?php echo $data1['fasilitas'] ?></p>
                                </div>
                                <div class="tab-pane fade show" id="tabs-4-3">
                                    <p>Untuk harga masuk ke dalam wisata ini, sekitar <?php echo 'Rp ' . number_format($data1['price'], 0, ',', '.') ?> per orang</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section section-sm">
            <div class="container">
                <h3 class="title-block find-car oh"><span class="d-inline-block wow slideInUp">Lokasi</span></h3>
                <div class="container">
                    <?php echo $data1['lokasi'] ?>
                </div>
            </div>
        </section>

        <section class="section section-sm">
            <h3>Rekomendasi Destinasi</h3>
            <div class="row row-30 justify-content-center box-ordered">
                <?php
                include "public/config/connection.php";
                $id_sekarang = $_GET['id'];
                $query1 = mysqli_query($connect, "SELECT t.id, t.gambar, t.nama_tempat FROM traveling as t where t.id != $id_sekarang order by RAND() limit 5");
                while ($data2 = mysqli_fetch_array($query1)) {
                ?>
                    <div class="col-sm-6 col-md-5 col-lg-3">
                        <!-- Team Modern-->
                        <article class="team-modern">
                            <div class="team-modern-header"><a class="team-modern-figure" href="detail_destinasi.php?id=<?php echo $data2['id'] ?>"><img class="img-circles" src="admin/pages/travel/<?php echo $data2['gambar'] ?>" alt="" style="max-width: 118px !important; height:118px !important" /></a>
                                <svg x=" 0px" y="0px" width="270px" height="70px" viewbox="0 0 270 70" enable-background="new 0 0 270 70" xml:space="preserve">
                                    <g>
                                        <path fill="#161616" d="M202.085,0C193.477,28.912,166.708,50,135,50S76.523,28.912,67.915,0H0v70h270V0H202.085z"></path>
                                    </g>
                                </svg>
                            </div>
                            <div class="team-modern-caption">
                                <h6 class="team-modern-name"><a href="detail_destinasi.php?id=<?php echo $data2['id'] ?>"><?php echo $data2['nama_tempat'] ?></a></h6>
                            </div>
                        </article>
                    </div>
                <?php } ?>
            </div>
        </section>

        <!-- Komentar Section -->
        <form action="f_komen.php" method="post">
            <div class="kotak-komen">
                <div class="row">
                    <div class="col-md-6">
                        <div class="mb-3">
                            <input type="hidden" value="<?php echo $data1['id'] ?>" name="id" readonly>
                        </div>
                        <?php
                        if (isset($_SESSION['username'])) {
                        ?>
                            <div class="mb-3 mt-5">
                                <label for="exampleFormControlTextarea1" class="form-label">Komentar</label>
                                <textarea class="form-control" id="komentar" rows="3" name="komentar"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary mb-5">Kirim</button>
                        <?php } else {
                            echo "<a href='login.php'>Login</a> untuk memberikan komentar";
                        }
                        ?>
                    </div>
                    <div class="col-md-6">
                        <div class="comments-section">
                            <?php
                            $koment = mysqli_query($connect, "SELECT r.review, r.created_at, t.id, u.username_user AS username
                              FROM review AS r 
                              JOIN traveling AS t ON r.id_travel = t.id
                              LEFT JOIN user AS u ON r.id_user = u.id_nama_user
                              WHERE t.id = '{$data1['id']}' ORDER BY r.created_at DESC");
                            if (mysqli_num_rows($koment) > 0) {
                                while ($komentar = mysqli_fetch_array($koment)) {
                            ?>
                                    <div class="comment">
                                        <h6>
                                            <?php
                                            echo htmlspecialchars($komentar['username'], ENT_QUOTES, 'UTF-8');
                                            ?>
                                        </h6>
                                        <p class="review"><?php echo htmlspecialchars($komentar['review'], ENT_QUOTES, 'UTF-8'); ?></p>
                                        <small class="text-muted">Publish pada <?php echo date('F j, Y, g:i a', strtotime($komentar['created_at'])); ?></small>
                                    </div>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <br>
        </form>
        <!-- Tombol Love -->

        <!-- End Komentar -->

        <?php
        include "public/layouts/footer.php";
        ?>

    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"></div>
    <!-- Javascript-->
    <script src="public/assets/js/core.min.js"></script>
    <script src="public/assets/js/script.js"></script>
    <script>
        $(document).ready(function() {
            $('.like-button').click(function() {
                var travelId = $(this).data('travel-id');
                var userId = $(this).data('user-id');
                var likeButton = $(this); // Store the like button element

                $.ajax({
                    type: 'POST',
                    url: 'f_suka.php',
                    data: {
                        travelId: travelId,
                        userId: userId
                    },
                    success: function(response) {
                        // Handle the response if needed

                        // Reload the page
                        location.reload();
                    },
                    error: function(error) {
                        // Handle the error if needed
                        console.error('Error:', error);
                    }
                });
            });
        });
    </script>
    <script src="https://kit.fontawesome.com/25db4f44a1.js" crossorigin="anonymous"></script>

</html>