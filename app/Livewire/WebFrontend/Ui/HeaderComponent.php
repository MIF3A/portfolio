<?php

namespace App\Livewire\WebFrontend\Ui;

use Livewire\Component;

class HeaderComponent extends Component
{
    public function render()
    {
        return <<<'blade'
            <header id="header">
              <div class="d-flex flex-column">

                <div class="profile">
                  <img src="assets/img/Ori.jpg" alt="" class="img-fluid rounded-circle">
                  <h1 class="text-light"><a href="index.html">Uray Naufal A</a></h1>
                  <div class="social-links mt-3 text-center">
                    <a href="https://x.com/?lang=en&mx=2" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="https://www.instagram.com/uraynaufall/" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="https://www.google.com/search?client=firefox-b-d&q=google+plus" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="https://www.google.com/search?client=firefox-b-d&q=linkedin" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                  </div>
                </div>

                <nav id="navbar" class="nav-menu navbar">
                  <ul>
                    <li><a href="#hero" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Home</span></a></li>
                    <li><a href="#about" class="nav-link scrollto"><i class="bx bx-user"></i> <span>About</span></a></li>
                    <li><a href="#resume" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
                    <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Portfolio</span></a></li>
                    <li><a href="#services" class="nav-link scrollto"><i class="bx bx-server"></i> <span>Services</span></a></li>
                    <li><a href="#contact" class="nav-link scrollto"><i class="bx bx-envelope"></i> <span>Contact</span></a></li>
                  </ul>
                </nav><!-- .nav-menu -->
              </div>
            </header>
        blade;
    }
}
