Giải phương trình bậc 2: ax^2 + bx + c = 0
<?php
    $a = readline("Nhập a: ");
    $b = readline("Nhập b: ");
    $c = readline("Nhập c: ");
    $delta = ($b*$b - 4*$a*$c)*1.0;
    print("\nKết quả: ");
    if($a == 0){
        if($b == 0){
            if($c == 0) print("Phương trình có vô số nghiệm.");
            else print("Phương trình vô nghiệm.");
        } else print("Phương trình có nghiệm duy nhất: x = ".(-$c/$b));
    } else {
        if($delta < 0) {
            print("Phương trình vô nghiệm.");
        } else if($delta == 0)
            print("Phương trình có một nghiệm duy nhất: x = ".(-$b*1.0/(2*$a)));
        else {
            print("Phương trình có 2 nghiệm phân biệt: \nx1 = ".((-$b + sqrt($delta))/(2*$a))."; x2 = ".((-$b - sqrt($delta))/(2*$a)));
        }
    }

    print("\n");
?>
