<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
  /**
   * @Route("/")
   * */
  public function index(): Response
  {
    $number = random_int(0, 100);
    $headerInfos = [
      0 => [
        'icon' => 'telephone-fill',
        'title' => '0274-5305505'
      ],
      1 => [
        'icon' => 'chat-left-text-fill',
        'title' => 'Live Chat'
      ],
      2 => [
        'icon' => 'person-circle',
        'title' => 'Member Area'
      ]
    ];
    $menus = [
      'Hosting',
      'Domain',
      'Server',
      'Website',
      'Afiliasi',
      'Promo',
      'Pembayaran',
      'Review',
      'Kontak',
      'Blog'
    ];
    $textsPHPHosting = [
      'Solusi PHP untuk performa query yang lebih cepat.',
      'Konsumsi memory yang lebih rendah.',
      'Support PHP 5.3, PHP 5.4, PHP 5.5, PHP 5.6, PHP 7.',
      'Fitur enskripsi IonCube dan Zend Guard Loaders.'
    ];
    $phpModul = [
      'IcePHP',
      'http',
      'nd_pdo_mysql',
      'stats',
      'apc',
      'huffman',
      'oauth',
      'stem',
      'apcu',
      'idn',
      'oci8',
      'stomp',
      'apm',
      'igbinary',
      'odbc',
      'suhosin',
      'ares',
      'imagick',
      'opcache',
      'sybase_ct',
      'bcmath',
      'imap',
      'pdf',
      'sysvmsg',
      'bcompiler',
      'inclued',
      'pdo',
      'sysvsem',
      'big_int',
      'inotify',
      'pdo_dblib',
      'sysvshm',
      'bitset',
      'interbase',
      'pdo_firebird',
      'tidy',
      'bloomy',
      'intl',
      'pdo_mysql',
      'timezonedb',
      'bz2_filter',
      'ioncube_loader',
      'pdo_odbc',
      'trader',
      'clamav',
      'ioncube_loader_4',
      'pdo_pgsql',
      'translit',
      'coin_acceptor',
      'jsmin',
      'pdo_sqlite',
      'uploadprogress',
      'crack',
      'json',
      'pgsql',
      'uri_template',
      'dba',
      'Idap',
      'phalcon',
      'uuid'
    ];

    return $this->render('home.html.twig', [
      'number' => $number,
      'menus' => $menus,
      'headerInfos' => $headerInfos,
      'textsPHPHosting' => $textsPHPHosting,
      'phpModul' => $phpModul
    ]);
  }
}