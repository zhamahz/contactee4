<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Министерство образования и науки Кыргызской Республики</title>

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>VUZ.KG</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="../../web/assets1/img/favicon.png" rel="icon">
    <link href="../../web/assets1/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- Link Datatable-->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

    <link href="../../web/assets1/vendor/aos/aos.css" rel="stylesheet">
    <link href="../../web/assets1/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../web/assets1/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="../../web/assets1/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="../../web/assets1/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="../../web/assets1/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="../../web/assets1/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/rowgroup/1.1.2/css/rowGroup.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/buttons/1.6.1/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
          href="https://cdn.datatables.net/datetime/1.0.2/css/dataTables.dateTime.min.css">

    <!-- Template Main CSS File -->
    <link type="text/css" href="../../web/assets1/css/styles.css" rel="stylesheet">
    <!--    <link type="text/css" href="../../web/assets1/css/style.css" rel="stylesheet">-->
    <!--    <link type="text/css" href="../../web/assets1/css/main.css" rel="stylesheet">-->
    <!--    <link type="text/css" href="../../web/assets1/css/new_styles.css" rel="stylesheet">-->
</head>
<body>

<div class="wrap">
    <header id="header" class="fixed-top d-flex align-items-center ">
        <div class="container">
            <div class="header-container d-flex align-items-center justify-content-between">
                <div class="logotype">
                    <h1 class="text-light"><?= yii\helpers\Html::a('VUZ.KG', ["/site/index"], ['class' => 'txt2']) ?></h1>

                </div>
                <nav id="navbar" class="nav navbar">
                    <ul>
                        <li><?= yii\helpers\Html::a('Главная', ["/site/index"], ['class' => 'txt2']) ?></li>
                        <li><a href="#about">О нас</a></li>
                        <li><a href="#why-us">Образование</a></li>
                        <li><a href="#portfolio ">Университеты</a></li>
                        <li class="dropdown"><a href="#services"><span>Услуги</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Поступление</a></li>
                                <li><a href="#">Стипендии</a></li>
                                <li><a href="#">Курсы</a></li>
                                <li><a href="#">Виза</a></li>
                            </ul>
                        </li>
                        <li><?= yii\helpers\Html::a('Войти', ["applicant/students/register"], ['class' => 'getstarted scrollto']) ?></li>
                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav><!-- .navbar -->
            </div><!-- End Header Container -->
        </div>
    </header>
    <style>
        #hero {
            width: 100%;
            height: 80vh;
            background: url("../../web/assets1/img/background.jpg") center center;
            background-size: cover;
            position: relative;
        }

    </style>
    <!-- ======= Hero Section ======= -->
    <section id="hero" class=" hero d-flex align-items-center">
        <div class="container text-center position-relative" data-aos="fade-in" data-aos-delay="200">
            <h1>ОБРАЗОВАНИЕ В КЫРГЫЗСТАНЕ С VUZ.KG</h1>
            <h2>Мы поможем Вам поступить в любой ВУЗ Кыргызстана!</h2>
            <a href="#about" class="cta-btn scrollto">Помощь в поступлении</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container">
                <div class="row content">
                    <div class="col-lg-7" data-aos="fade-right" data-aos-delay="100">
                        <h2>Образование и коронавирус</h2>
                        <p align="justify">Несмотря на ситуацию с коронавирусом поступления на программы среднего и
                            высшего образования за рубежом продолжаются. Приемные комиссии работают в штатном режиме.
                            Открыт набор студентов на
                            зимний интейк, а также осень 2021 года. Будем держать вас в курсе.</p>
                    </div>
                    <div class="col-lg-5 pt-4 pt-lg-0" data-aos="fade-left" data-aos-delay="200">
                        <h2> Что мы делаем?</h2>
                        <ul>
                            <li><i class="ri-check-double-line"></i> Подбор программ по вашим критериям</li>
                            <li><i class="ri-check-double-line"></i> Подготовка аппликационных документов</li>
                            <li><i class="ri-check-double-line"></i> Взаимодействие с вузами по любым вопросам</li>
                            <li><i class="ri-check-double-line"></i> Получение приглашения из ВУЗа</li>
                            <li><i class="ri-check-double-line"></i> Оформление студенческой визы</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
            <div class="container">

                <div class="row counters">

                    <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="232" data-purecounter-duration="1"
                          class="purecounter"></span>
                        <p>Стран</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="521" data-purecounter-duration="1"
                          class="purecounter"></span>
                        <p>Направлений</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="50" data-purecounter-duration="1"
                          class="purecounter"></span>
                        <p>Университетов</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1"
                          class="purecounter"></span>
                        <p>Посещений в месяц</p>
                    </div>

                </div>

            </div>
        </section><!-- End Counts Section -->

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch" data-aos="fade-right">
                        <div class="content">
                            <h3>Образование в КР</h3>
                            <p>
                                Образование в Кыргызстане является обязательным в течение девяти лет, в возрасте от семи
                                до
                                пятнадцати лет. После четырех лет начальной школы и пяти лет средней школы, система
                                предлагает два года старшей общей школы, средней специальной школы или Профессионального
                                училища.
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">
                            <div class="row">
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in"
                                     data-aos-delay="100">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-receipt"></i>
                                        <h4>Бакалавр</h4>
                                        <p>Бакалавр относится к базовому высшему профессиональному образованию, которое
                                            дает
                                            право на профессиональную деятельность с присвоенной
                                            академической степенью.</p>
                                        <a href="#" class="more-btn">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in"
                                     data-aos-delay="200">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-cube-alt"></i>
                                        <h4>Магистратура</h4>
                                        <p>Магистратура – это завершающая академическая степень в системе
                                            многоуровневого
                                            университетского образования, имеющая свои цели и задачи.</p>
                                        <a href="#" class="more-btn">Learn More</a>
                                    </div>
                                </div>
                                <div class="col-xl-4 d-flex align-items-stretch" data-aos="zoom-in"
                                     data-aos-delay="300">
                                    <div class="icon-box mt-4 mt-xl-0">
                                        <i class="bx bx-images"></i>
                                        <h4>Аспирантура</h4>
                                        <p>Аспирантура – это форма подготовки научно-педагогических и научных кадров в
                                            системе послевузовского профессионального образования.</p>
                                        <a href="#" class="more-btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div><!-- End .content-->
                    </div>
                </div>
            </div>
        </section><!-- End Why Us Section -->

        <!-- ======= Cta Section ======= -->
        <section id="cta" class="cta">
            <div class="container">

                <div class="text-center" data-aos="zoom-in">
                    <h1>Почему стоит обратиться в VUZ.KG?</h1><br>
                    <p> Наша главная задача – это Ваш успех в поступлении.</p>
                    <p>Мы помогаем осуществить Вашу мечту и достигнуть поставленной цели.</p>
                    <a class="cta-btn" href="applicant/apply.php">Подать заявку</a>
                </div>

            </div>
        </section><!-- End Cta Section -->

        <!-- ======= Portfolio Section ======= -->
        <!--    <section id="portfolio" class="portfolio">-->
        <!--        <div class="container">-->
        <!--            <div class="section-title" data-aos="fade-left">-->
        <!--                <h2>Университеты</h2>-->
        <!--                <p>Информация носит ознакомительный характер. Для получения точной информации обратитесь к-->
        <!--                    официальному-->
        <!--                    сайту учебного заведения.</p>-->
        <!--            </div>-->
        <!--            <div class="row">-->
        <!--                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">-->
        <!--                    <div class="card">-->
        <!--                        <div class="card-body">-->
        <!--                            <div class="table-responsive">-->
        <!--                                <table id="example" class="table table-striped table-bordered first">-->
        <!--                                    <thead>-->
        <!--                                    <tr>-->
        <!--                                        <td id="id">#</td>-->
        <!--                                        <th>Название</th>-->
        <!--                                        <th>Специальности</th>-->
        <!--                                        <th>Статус</th>-->
        <!--                                        <th>Адрес</th>-->
        <!--                                    </tr>-->
        <!--                                    </thead>-->
        <!--                                    <tbody style="font-size: 14px">-->
        <!--                                    <tr>-->
        <!--                                        <td>1</td>-->
        <!--                                        <td>Кыргызский Экономический Университет</td>-->
        <!--                                        <td>Бухгалтерский учет</td>-->
        <!--                                        <td>Государственный</td>-->
        <!--                                        <td>г.Бишкек - Первомайский район - ул. Т. Молдо, 58</td>-->
        <!--                                    </tr>-->
        <!--                                    <tr>-->
        <!--                                        <td>2</td>-->
        <!--                                        <td>Кыргызский Государственный Университет Строительства, Транспорта и-->
        <!--                                            Архитектуры им. Н.Исанова-->
        <!--                                        </td>-->
        <!--                                        <td>Информатика</td>-->
        <!--                                        <td>Государственный</td>-->
        <!--                                        <td>г.Бишкек - Октябрьский район - ул. Малдыбаева 34Б</td>-->
        <!--                                    </tr>-->
        <!--                                    <tr>-->
        <!--                                        <td>3</td>-->
        <!--                                        <td>Кыргызская Государственная Медицинская Академия им. И.К. Ахунбаева</td>-->
        <!--                                        <td>Биотехнология</td>-->
        <!--                                        <td>Государственный</td>-->
        <!--                                        <td>92 ул. Ахунбаева, Бишкек</td>-->
        <!--                                    </tr>-->
        <!--                                    </tbody>-->
        <!--                                    <tfoot>-->
        <!--                                    <tr>-->
        <!--                                        <td></td>-->
        <!--                                        <th>Название</th>-->
        <!--                                        <th>Специальности</th>-->
        <!--                                        <th>Статус</th>-->
        <!--                                        <th>Адрес</th>-->
        <!--                                    </tr>-->
        <!--                                    </tfoot>-->
        <!--                                </table>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                    <script>-->
        <!--                        $(document).ready(function () {-->
        <!--                                // Setup - add a text input to each footer cell-->
        <!--                                $('#example tfoot th').each(function () {-->
        <!--                                    var title = $(this).text();-->
        <!--                                    $(this).html('<input style="width: 135px; font-size: 15px" type="text" placeholder="' + title + '" />');-->
        <!--                                });-->
        <!--                                // DataTable-->
        <!--                                var table = $('#example').DataTable({-->
        <!--                                    initComplete: function () {-->
        <!--                                        // Apply the search-->
        <!--                                        this.api().columns().every(function () {-->
        <!--                                            var that = this;-->
        <!--                                            $('input', this.footer()).on('keyup change clear', function () {-->
        <!--                                                if (that.search() !== this.value) {-->
        <!--                                                    that-->
        <!--                                                        .search(this.value)-->
        <!--                                                        .draw();-->
        <!--                                                }-->
        <!--                                            });-->
        <!--                                        });-->
        <!--                                    }-->
        <!--                                });-->
        <!--                            }-->
        <!--                        );-->
        <!--                    </script>-->
        <!--                </div>-->
        <!--                --><? //= yii\helpers\Html::a('<i style="font-size: 40px;" class="bi bi-arrow-right"></i>',
        //                    ["/universities/universities"], ['class' => 'd-flex align-items-center justify-content-center']) ?>
        <!--            </div>-->
        <!---->
        <!--        </div>-->
        <!--    </section> End Portfolio Section -->
        <!-- ======= Services Section ======= -->
        <!--    <section id="portfolio" class="portfolio">-->
        <!--        <div class="container">-->
        <!---->
        <!--            <div class="section-title" data-aos="fade-left">-->
        <!--                <h2>Portfolio</h2>-->
        <!--                <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        <!--            </div>-->
        <!---->
        <!--            <div class="row" data-aos="fade-up" data-aos-delay="100">-->
        <!--                <div class="col-lg-12 d-flex justify-content-center">-->
        <!--                    <ul id="portfolio-flters">-->
        <!--                        <li data-filter="*" class="filter-active">All</li>-->
        <!--                        <li data-filter=".filter-app">Faculties</li>-->
        <!--                        <li data-filter=".filter-card">Hostel</li>-->
        <!--                        <li data-filter=".filter-web">Status</li>-->
        <!--                    </ul>-->
        <!--                </div>-->
        <!--            </div>-->
        <!---->
        <!--            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">-->
        <!--                    <p></p>-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>App 1</h4>-->
        <!--                            <p>App</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>Web 3</h4>-->
        <!--                            <p>Web</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>App 2</h4>-->
        <!--                            <p>App</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>Card 2</h4>-->
        <!--                            <p>Card</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>Web 2</h4>-->
        <!--                            <p>Web</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>App 3</h4>-->
        <!--                            <p>App</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>Card 1</h4>-->
        <!--                            <p>Card</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>Card 3</h4>-->
        <!--                            <p>Card</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
        <!--                    <div class="portfolio-wrap">-->
        <!--                        <img src="../../web/assets1/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">-->
        <!--                        <div class="portfolio-info">-->
        <!--                            <h4>Web 3</h4>-->
        <!--                            <p>Web</p>-->
        <!--                            <div class="portfolio-links">-->
        <!--                                <a href="../../web/assets1/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>-->
        <!--                                <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>-->
        <!--                            </div>-->
        <!--                        </div>-->
        <!--                    </div>-->
        <!--                </div>-->
        <!---->
        <!--            </div>-->
        <!---->
        <!--        </div>-->
        <!--    </section>-->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="section-title" data-aos="fade-left">
                    <h2>Университеты</h2>
                    <p>Информация носит ознакомительный характер. Для получения точной информации обратитесь к
                        официальному
                        сайту учебного заведения.</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/BHU_fantan.jpg/1280px-BHU_fantan.jpg"
                                 class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Бишкекский гуманитарный университет имени К. Карасаева</h4>
                                <div class="portfolio-links">
                                    <a href="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/BHU_fantan.jpg/1280px-BHU_fantan.jpg"
                                       data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                                    <a href="https://kaktus.media/doc/375582_gid_po_vyzam_bishkeka:_bishkekskiy_gymanitarnyy_yniversitet.html"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="https://smapse.ru/storage/2020/05/kyrgyz-national-university-smapse8.jpg"
                                 class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Кыргызский национальный университет им. Ж. Баласагына</h4>
                                <div class="portfolio-links">
                                    <a href="https://smapse.ru/storage/2020/05/kyrgyz-national-university-smapse8.jpg"
                                       data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                                    <a href="https://kaktus.media/doc/375542_gid_po_vyzam_bishkeka:_kyrgyzskiy_nacionalnyy_yniversitet.html"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="https://kstu.kg/fileadmin/main_menu/enrollee/fasad.jpg" class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Кыргызский государственный технический университет им. И. Раззакова</h4>
                                <div class="portfolio-links">
                                    <a href="https://kstu.kg/fileadmin/main_menu/enrollee/fasad.jpg"
                                       data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                                    <a href="https://kaktus.media/doc/375836_gid_po_vyzam_bishkeka:_kyrgyzskiy_gosydarstvennyy_tehnicheskiy_yniversitet_kgty.html"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <div class="portfolio-wrap">
                            <img src="https://data.kaktus.media/image/original/2018-06-25_09-49-12_985764.jpg"
                                 class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Кыргызский государственный университет строительства, транспорта и архитектуры</h4>
                                <div class="portfolio-links">
                                    <a href="https://data.kaktus.media/image/original/2018-06-25_09-49-12_985764.jpg"
                                       data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                                    <a href="https://kaktus.media/doc/376201_gid_po_vyzam_bishkeka:_kgysta.html"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <div class="portfolio-wrap">
                            <img src="https://data.kaktus.media/image/original/2020-07-13_10-29-54_502281.jpg"
                                 class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>УНПК Международный университет Кыргызстана;</h4>
                                <div class="portfolio-links">
                                    <a href="https://data.kaktus.media/image/original/2020-07-13_10-29-54_502281.jpg"
                                       data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                                    <a href="https://kaktus.media/doc/376033_gid_po_vyzam_bishkeka:_mejdynarodnyy_yniversitet_kyrgyzstana_myk.html"
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <div class="portfolio-wrap">
                            <img src="https://i1.photo.2gis.com/images/branch/112/15762598744810430_9173.jpg"
                                 class="img-fluid" alt="">
                            <div class="portfolio-info">
                                <h4>Кыргызская государственная медицинская академия имени И. К. Ахунбаева</h4>
                                <div class="portfolio-links">
                                    <a href="https://i1.photo.2gis.com/images/branch/112/15762598744810430_9173.jpg"
                                       data-gallery="portfolioGallery"
                                       class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                                    <a href="https://kaktus.media/doc/394190_gid_po_vyzam:_kyrgyzskaia_gosydarstvennaia_medicinskaia_akademiia_imeni_i.k._ahynbaeva_kgma.html   "
                                       title="More Details"><i class="bx bx-link"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?= yii\helpers\Html::a('<i style="font-size: 40px;" class="bi bi-arrow-right"></i>',
                    ["/universities/universities"], ['class' => 'd-flex align-items-center justify-content-center']) ?>
            </div>
        </section><!-- End Portfolio Section -->
        <section id="services" class="services section-bg">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4">
                        <div class="section-title" data-aos="fade-right">
                            <h2>Разное</h2>
                            <p>Здесь вы можете найти услугу</p>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <div class="row">
                            <div class="col-md-6 align-items-stretch">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
                                    <div class="icon"><i class="bx bi-window-dock"></i></div>
                                    <h4><a href="">Поступление</a></h4>
                                    <p>Пошаговая инструкция по поступлению в ВУЗ</p>
                                </div>
                            </div>

                            <div class="col-md-6 align-items-stretch mt-4 mt-lg-0">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
                                    <div class="icon"><i class="bx bi-cash-stack"></i></div>
                                    <h4><a href="">Стипендии</a></h4>
                                    <p>Как получить грант или стипендию на обучение?</p>
                                </div>
                            </div>

                            <div class="col-md-6 align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
                                    <div class="icon"><i class="bx bx-book-open"></i></div>
                                    <h4><a href="">Языковые курсы</a></h4>
                                    <p>Где проходить курсы в КР?</p>
                                </div>
                            </div>

                            <div class="col-md-6 align-items-stretch mt-4">
                                <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
                                    <div class="icon"><i class="bx bx-world"></i></div>
                                    <h4><a href="">Виза</a></h4>
                                    <p>Сроки и стоимость оформления студенческих виз</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

    </main><!-- End #main -->
    <footer id="footer">

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <!--            yii\helpers\Html::a('МОН', ["admin/user/index"], ['class' => 'big-button'])
                -->
                <?= yii\helpers\Html::a('МОН', ["/site/login"], ['class' => 'big-button']) ?>
                <?= yii\helpers\Html::a('ВУЗ', ["/studentregistration/index"], ['class' => 'big-button']) ?>
                <?= yii\helpers\Html::a('МИД', ["/site/login1"], ['class' => 'big-button']) ?>
            </div>
            <style>
                .container .me-md-auto a {
                    margin: 50px;
                    font-weight: bold;
                    font-size: 18px;
                }
            </style>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <!-- Vendor JS Files -->
    <script src="../../web/assets1/vendor/aos/aos.js"></script>
    <script src="../../web/assets1/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../../web/assets1/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="../../web/assets1/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="../../web/assets1/vendor/php-email-form/validate.js"></script>
    <script src="../../web/assets1/vendor/purecounter/purecounter.js"></script>
    <script src="../../web/assets1/vendor/swiper/swiper-bundle.min.js"></script>

    <script src="../../web/assets1/js/main.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>

    <script src="../../web/assets1/vendor/datatables/js/dataTables.bootstrap4.min.js"></script>

    <script src="../../web/assets1/vendor/datatables/js/buttons.bootstrap4.min.js"></script>
    <script src="../../web/assets1/vendor/datatables/js/data-table.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.colVis.min.js"></script>
    <script src="https://cdn.datatables.net/rowgroup/1.0.4/js/dataTables.rowGroup.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="https://cdn.datatables.net/fixedheader/3.1.5/js/dataTables.fixedHeader.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>


</body>
</html>