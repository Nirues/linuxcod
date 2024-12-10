    <div class="closeSearch">
        <?php require_once "./mvc/Views/User/blocks/BreadCrum.php"?>

        <section class="MainProduct">
            <div class="MainProduct__Menu">
                <div class="MainProduct__Item MainProduct__Menu--Border">
                    <ul>
                        <h3>News categories</h3>
                        <div>
                            <?php foreach($data["sidebar"] as $item)
                            {?>
                            <li><a href=""><?php echo $item["category"] == 1 ? "Luxury Phone" : "product diversity" ?></a></li>
                            <?php } ?>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__pacePrice MainProduct__Menu--Border">
                    <ul>
                        <h3>Key Word</h3>
                        <div class="keyWords">
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&page=0&IDLoai=2">Phone</a>
                            </div>
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&page=0&IDLoai=3">laptop</a>
                            </div>
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&page=0&IDLoai=7">Electronics</a>
                            </div>
                            <div>
                                <i class="fa-solid fa-tag"></i>
                                <a href="SanPham&page=0&IDLoai=1">Accessory</a>
                            </div>
                        </div>
                    </ul>
                </div>
                <div class="MainProduct__Brand MainProduct__Menu--Border">
                    <ul>
                        <h3>"Featured Articles"</h3>
                        <div>
                            <?php foreach($data["topNews"] as $item)
                            {?>
                            <div class="newsHot">
                                <div class="newsHot__Img">
                                    <a href=""><img src="<?php echo $item["image"] ?>" alt=""></a>
                                </div>
                                <div class="newsHot__Content">
                                    <a href=""><?php echo strtoupper($item["title"]) ?></a>
                                    <div>
                                        <span><i
                                                class="fa-solid fa-calendar-days"></i><?php echo $item["date_at"] ?></span>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </ul>
                </div>
               
            </div>
            <div class="newsContain">
                <div class="newsContain__Body">
                    <div class="TitleItem">
                        <b></b>
                        <span>Stay Ahead of Trends</span>
                        <b></b>
                    </div>

                    <div class="section__8__News__Contain">
                        <div class="newsContain__Items">
                            <?php foreach($data["newsOne"] as $item)
                            {?>
                            <div class="NewItem NewItem--Papper">
                                <div class="NewItem__Image newsContain__Items--Img">
                                    <a href="">
                                        <img src="<?php echo $item["image"] ?>" alt="">
                                    </a>
                                </div>
                                <div class="NewItem__Content">
                                    <h3><a href=""><?php echo $item["title"] ?></a></h3>
                                    <span><?php echo $item["date_at"] ?></span>
                                    <p><?php echo $item["content"] ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>

                <div class="newsContain__Makup">
                    <div class="TitleItem">
                        <b></b>
                        <span>"Fast Shopping and Delivery"</span>
                        <b></b>
                    </div>

                    <div class="section__8__News__Contain">
                        <div class="newsContain__Items">
                            <?php foreach($data["newsTwo"] as $item)
                            {?>
                            <div class="NewItem NewItem--Papper">
                                <div class="NewItem__Image newsContain__Items--Img">
                                    <a href="">
                                        <img src="<?php echo $item["image"] ?>" alt="">
                                    </a>
                                </div>
                                <div class="NewItem__Content">
                                    <h3><a href=""><?php echo $item["title"] ?></a></h3>
                                    <span><?php echo $item["date_at"] ?></span>
                                    <p><?php echo $item["content"] ?></p>
                                </div>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>