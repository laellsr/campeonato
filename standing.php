<!DOCTYPE html>
<html lang="zxx">

<!-- require once html head begin  -->
<?php require_once "head.html"; ?>
<!-- require once html head end  -->

    <body>        

        <!-- require once navbar begin  -->
        <?php require_once "navbar.html"; ?>
        <!-- require once navbar end  -->


        <!-- breadcrumb begin -->
        <div class="breadcrumb-bettix standing-page" style="background-position: 10% 1%;background-image: url(assets/img/blog-2.jpg);">
            <div class="container">
                <div class="row">
                    <div class="col-xl-7 col-lg-7">
                        <div class="breadcrumb-content">
                            <h2>Team Standing</h2>
                            <ul>
                                <li>
                                    <a href="index.php">Home</a>
                                </li>
                                <li>
                                    Teams
                                </li>
                                <li>
                                     Standing
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- breadcrumb end -->

        <!-- standing begin -->
        <div class="standing">
            <div class="container">
                <div class="standing-list-cover">
                    <div class="standing-team-list">
                        <h4 class="result-title">Standing</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Pos</th>
                                    <th scope="col">Team</th>
                                    <th scope="col">w</th>
                                    <th scope="col">l</th>
                                    <th scope="col">t</th>
                                    <th scope="col">pts</th>
                                    <th scope="col">diff</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">1</th>
                                    <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-1.png" alt="">
                                            </span>
                                            <span class="text">
                                                <a href="khulna.php">Khulna Tigers</a>
                                            </span>
                                        </span>
                                    </td>
                                    <td>4</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td>40</td>
                                    <td><span class="diff">+40</span></td>
                                    <td>
                                        <button>
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">2</th>
                                    <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-2.png" alt="">
                                            </span>
                                            <span class="text">
                                                <a href="dhaka.php">Dhaka Platoon</a>
                                            </span>
                                        </span>
                                    </td>
                                    <td>3</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td>25</td>
                                    <td><span class="diff">+30</span></td>
                                    <td>
                                        <button>
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">3</th>
                                    <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-3.png" alt="">
                                            </span>
                                            <span class="text">
                                                Sylhet thunder
                                            </span>
                                        </span>
                                    </td>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>1</td>
                                    <td>0</td>
                                    <td><span class="diff">+10</span></td>
                                    <td>
                                        <button>
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">4</th>
                                    <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-4.png" alt="">
                                            </span>
                                            <span class="text">
                                                <a href="rajshahi.php">Rajshahi Royals<a>
                                            </span>
                                        </span>
                                    </td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>-20</td>
                                    <td><span class="diff">+0</span></td>
                                    <td>
                                        <button>
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">5</th>
                                    <td>
                                        <span class="single-team">
                                            <span class="logo">
                                                <img src="assets/img/team-5.png" alt="">
                                            </span>
                                            <span class="text">
                                                Rangpur SIxers
                                            </span>
                                        </span>
                                    </td>
                                    <td>0</td>
                                    <td>2</td>
                                    <td>2</td>
                                    <td>-20</td>
                                    <td><span class="diff">+0</span></td>
                                    <td>
                                        <button>
                                            <i class="fas fa-ellipsis-v"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <span class="text-special">
                    <b>Glossary Terms:</b>  <b class="color-sec">W</b> = Wins, <b class="color-sec">T</b> = Ties, <b class="color-sec">Diff</b> = Point differental, <b class="color-sec">L</b> = Loses, <b class="color-sec">PTS</b> = Winning Percentage  
                </span>
            </div>
        </div>
        <!-- standing end -->

        <!-- require once footer begin  -->
        <?php require_once "footer.html"; ?>
        <!-- require once footer end  -->
        
        <!-- require once some scripts begin  -->
        <?php require_once "scripts.html"; ?>
        <!-- require once some scripts end  -->
        
    </body>
</html>