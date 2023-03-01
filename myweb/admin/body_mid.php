<div>
    <?php
        if(isset($_GET["ContentId"])) {
            switch($_GET["ContentId"]) {
                case "TrangChu":
                    require('admin/body_mid_TrangChu.php');
                    break;
                case "ThongTinTuyenSinh":
                    require('admin/body_mid_ThongTinTuyenSinh.php');
                    break;
                case "24hcomvn":
                    require('admin/body_mid_24hcomvn.php');
                    break;
                case "SoanEmail":
                    require('admin/body_mid_SoanEmail.php');
                    break;
                case "GoToSection2":
                    require('admin/body_mid_GoToSection2.php');
                    break;
                case "CacPhepTinhCoBan":
                    require('admin/body_mid_CacPhepTinhCoBan.php');
                    break;
                default:
                    require('admin/body_mid_TrangChu.php');
                    break;
            }
        }
    ?>
</div>