<?php
/*
 * Обработчик QR
 */
if (isset($_GET['qr-white']) || isset($_GET['qrencode']) || isset($_GET['qr'])) // Белый QR
{
    include('../../qr/LB_QR_LIBRARY_WHITE_BG.php'); // Подключаем библиотеку QR (перед директорией с сайтом)
    $param = $_GET['qr-white'].$_GET['qr'].$_GET['qrencode'];  // Фильтруем
    QRcode::png($param); // Вывод QR-кода напрямую как png-поток
}
if (isset($_GET['qr-black'])) // Чёрный QR
{
    include('../../qr/LB_QR_LIBRARY_BLACK_BG.php'); // Подключаем библиотеку QR (перед директорией с сайтом)
    $param = $_GET['qr-black'];  // Фильтруем
    QRcode::png($param); // Вывод QR-кода напрямую как png-поток
}
if (isset($_GET['qr-alpha-black'])) // Прозрачный QR
{
    include('../../qr/LB_QR_LIBRARY_ALPHA_B.php'); // Подключаем библиотеку QR (перед директорией с сайтом)
    $param = $_GET['qr-alpha-black'];  // Фильтруем
    QRcode::png($param); // Вывод QR-кода напрямую как png-поток
}
if (isset($_GET['qr-alpha-white'])) // Прозрачный QR
{
    include('../../qr/LB_QR_LIBRARY_ALPHA_W.php'); // Подключаем библиотеку QR (перед директорией с сайтом)
    $param = $_GET['qr-alpha-white'];  // Фильтруем
    QRcode::png($param); // Вывод QR-кода напрямую как png-поток
}
