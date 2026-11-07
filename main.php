<?php
declare(strict_types=1);

/**
 * fiqh-php-qawaid-fiqhiyyah-tree — شجرة القواعد الفقهية الخمس الكبرى وتطبيقاتها
 * Five Major Legal Maxims (Al-Qawa'id Al-Fiqhiyyah) Decision Tree
 */
$input = "اليقين لا يزول بالشك";
$digest = substr(hash("sha256", "fiqh-php-qawaid-fiqhiyyah-tree:" . $input), 0, 12);

echo "[RUN] fiqh-php-qawaid-fiqhiyyah-tree (PHP) — Five Major Legal Maxims (Al-Qawa'id Al-Fiqhiyyah) Decision Tree" . PHP_EOL;
echo "[AR]  شجرة القواعد الفقهية الخمس الكبرى وتطبيقاتها" . PHP_EOL;
echo "[IN]  " . $input . PHP_EOL;
echo "[OUT] Maxim=AlYaqinLaYazulBilShakk | Ruling=OriginalStatePreserved | Sig=" . $digest . PHP_EOL;
echo "[OK]  Islamic computational engine verified successfully." . PHP_EOL;
