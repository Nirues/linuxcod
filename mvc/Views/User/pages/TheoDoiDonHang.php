    <section class="closeSearch">
        <div class="Personally">
            <div class="Personally--Left">
                <?php require_once "./mvc/Views/User/blocks/MenuPersonally.php"?>
            </div>
            <div class="Personally--Right">
                <div class="Bill-Mobile">
                    <h2>Information Order</h2>
                    <?php
                            foreach($data["Bill"] as $item)
                            {?>
                    <div class="Bill-Mobile__Item">
                        <div class="Bill-Mobile__Item--Top">
                            <p>ID: <span><?php echo $item["IDDH"] ?></span></p>
                            <p>Date Booked: <span><?php echo $item["ngayDat"] ?></span></p>
                            <p>Shipping Fee: <span><?php echo number_format($item["phiGD"], 0, ',', '.') ?></span></p>
                            <p>Total:
                                <span><?php echo number_format($item["total"] + $item["phiGD"], 0, ',', '.') ?></span>
                            </p>
                            <p>Status: <span><?php echo $item["tinhTrang"] ?></span></p>
                        </div>
                        <div class="Bill-Mobile__Item--Bottom">
                            <span data-id="<?php echo $item["IDDH"] ?>" class="watchDetailBill"><i
                                    class="fa-solid fa-eye"></i> Xem</span>

                            <?php
                                if(strcmp($item["tinhTrang"],"Đã nhận hàng") == 0 || strcmp($item["tinhTrang"],"Đã hủy hàng") == 0)
                                {?>
                            <span data-id="<?php echo $item["IDDH"] ?>" class="deleteBill"><i
                                    class="fa-solid fa-trash"></i> Xóa</span>
                            <?php }
                                else
                                {?>
                            <span style="display: none"><i class="fa-solid fa-trash"></i> Delete</span>
                            <?php }?>
                        </div>
                    </div>
                    <?php }?>
                </div>
                <div class="Bill">
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Date Booked</th>
                                <th>Status</th>
                                <th>Shipping Fee</th>
                                <th>Discount</th>
                                <th>Total</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                foreach($data["Bill"] as $item)
                                {?>
                            <tr>
                                <td><?php echo $item["IDDH"] ?></td>
                                <td><?php echo $item["ngayDat"] ?></td>
                                <td><?php echo $item["tinhTrang"] ?></td>
                                <td><?php echo number_format($item["phiGD"], 0, ',', '.') ?><u>đ</u></td>
                                <td><?php echo $item["giamGia"] ?>%</td>
                                <td><?php echo number_format(($item["total"] + $item["phiGD"]) - (($item["total"] + $item["phiGD"]) * ($item["giamGia"] / 100)) , 0, ',', '.') ?><u>đ</u>
                                </td>
                                <td>
                                    <input type="button" class="watchDetailBill" name=""
                                        data-id="<?php echo $item["IDDH"] ?>" value="Xem">

                                    <?php
                                if(strcmp($item["tinhTrang"],"Đã nhận hàng") == 0 || strcmp($item["tinhTrang"],"Đã hủy hàng") == 0)
                                {?>
                                    <input type="button" class="deleteBill" name=""
                                        data-id="<?php echo $item["IDDH"] ?>" value="Xóa">
                                    <?php }
                                        else
                                        {?>
                                    <input type="button" style="background: #898989; border: black" disabled
                                        class="deleteBill" name="" data-id="<?php echo $item["IDDH"] ?>" value="Xóa">
                                    <?php }?>
                                </td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
            </div>
    </section>