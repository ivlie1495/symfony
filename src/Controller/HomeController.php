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

    return $this->render('home.html.twig', [
      'number' => $number,
      'menus' => $menus,
      'headerInfos' => $headerInfos,
      'textsPHPHosting' => $textsPHPHosting
    ]);
  }
}