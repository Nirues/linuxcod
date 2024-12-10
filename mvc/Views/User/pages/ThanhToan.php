<div class="closeSearch">
    <?php require_once "./mvc/Views/User/blocks/BreadCrum.php"?>

    <section class="containPay">
        <div class="tablePay">
            <div class="tablePay__Row1">
                <?php
                        if(!isset($_SESSION["logined"][0]["IDTK"]))
                        {?>
                <span>Bạn đã có tài khoản? <a href="DangNhap"><u>Ấn vào đây để đằng nhập</u></a></span>
                <?php }?>

                <span class="show-Codes">Bạn có mã ưu đãi? <a><u>Ấn vào đây để nhập mã</u></a></span>
                <div class="Codes">
                    <input type="text" placeholder="Mã giảm giá" class="Code-Input">
                    <p class="Code-error"></p>
                </div>
            </div>

            <div class="tablePay__Row2">
                <div class="Row2__Column1">
                    <h3>PAYMENT AND DELIVERY</h3>
                    <div>
                        <label for="">Full name<span>*</span></label>
                        <input type="text" class="nameCustomer" placeholder="Full Name"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["hoTen"]; else echo ''?>">
                    </div>
                    <div>
                        <label for="">Address<span>*</label>
                        <input type="text" class="addressCustomer" placeholder="Address"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["diachi"]; else echo ''?>">
                    </div>
                    <div>
                        <label for="">Phone Number<span>*</label>
                        <input type="text" class="phoneCustomer" placeholder="Contact Number"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["sdt"]; else echo ''?>">
                    </div>
                    <div>
                        <label for="">Email Address <span>*</label>
                        <input type="text" class="emailCustomer" placeholder="Email Address"
                            value="<?php if(isset($_SESSION["hoTen"])) echo $_SESSION["email"];else echo ''?>">
                    </div>
                    <div>
                        <label for="">Notes (optional) <span>*</span></label>
                        <textarea class="noteCustomer" placeholder="Note delivering"></textarea>
                    </div>
                </div>
                <div class="Row2__Column2">
                    <div class="Row2__Column2--Contain">
                        <h3>YOUR ORDER</h3>
                        <div class="Row2__Column2--Row1">
                            <p class="Row2__Column2--total">PRODUCT<span>TOTAL</span></p>
                            <div class="Column2__Row1--Contain">

                            </div>
                            <div class="Column2__Row1--Total">

                            </div>
                        </div>
                        <div class="Row2__Column2--Row2">
                            <div>
                            <div class="paypal--contain">

                                <input type="radio" class="rdPaymentMethod payPalBank" id="paypal--atm" checked="true"
                                    name="rdPaymentMethod" value="1"></input>
                                    <label for="paypal--atm">Bank transfer</label>
                                    </div>

                                <div class="Row2__Column2--Noted Noted__1">
                                    <p>
                                    Please wait for order confirmation via email from Inbox/Order staff <br>
after checking the stock status at the warehouse. Please <b>DO NOT</b> transfer

<br>
money before receiving confirmation from Nuty. Thank you
                                    </p>
                                </div>
                            </div>
                            <div>
                                <div class="paypal--contain">
                                <input type="radio" class="rdPaymentMethod" id="paypal--money" name="rdPaymentMethod" value="2"></input>
                                <label for="paypal--money">Cash on Delivery (COD)</label>
                                </div>
                                <div class="Row2__Column2--Noted Noted__2">

                                </div>
                            </div>
                            <!-- <div>
                                <button class="paypal_momo paypal__momo--QRCode">Thanh toán bằng MOMO QRCode</button>
                            </div> -->
                        </div>
                        <div class="Row2__Column2--Row3">
                            <input type="button" class="Order" value="ĐẶT HÀNG">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="containPayed">

    </section>
</div>