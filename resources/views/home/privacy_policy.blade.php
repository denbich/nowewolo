@extends('layouts.home')

@section('title') @lang('Polityka prywatności') @endsection

@section('content')

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a href="{{ route('home.index') }}"><img src="{{ url('/assets/img/logo.svg') }}" alt="" class="img-fluid my-2" style="min-height:65px;"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="{{ route('home.index') }}">@lang('Strona główna')</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index', '#about') }}">@lang('O nas')</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index', '#services') }}">@lang('Nasze projekty')</a></li>
          <li><a class="nav-link scrollto" href="{{ route('home.index', '#contact') }}">@lang('Kontakt')</a></li>
          <li><a class="getstarted" href="#">@lang('Narzędzie VOLIT - wkrótce!')</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">
    <section id="" class="d-flex align-items-center pt-5 mt-5">

        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 pt-3 pt-lg-0 d-flex flex-column justify-content-center text-center">
              <h1 data-aos="fade-up">@lang('Polityka prywatności')</h1>
              <h2 data-aos="fade-up" data-aos-delay="200">@lang('strony nowewolo.pl')</h2>
            </div>
          </div>
          <div class="" data-aos="fade-up" data-aos-delay="200">
            <div class="card-body">
                <ol>
                    <li><h4>POSTANOWIENIA OGÓLNE</h4>
                        <ol>
                            <li>
                                Administratorem danych osobowych zbieranych za pośrednictwem strony internetowej <strong>https://nowewolo.pl</strong> jest Stowarzyszenie <strong>Nowe Wolo</strong>, adres siedziby: ul. Chwałowicka 27e/9, NIP: 6423240217, REGON: 523231654, wpisaną do rejestru stowarzyszeń zwykłych miasta Rybnik, adres poczty elektronicznej: biuro@nowewolo.pl, numer telefonu +48530403181, dalej „Administrator”, będący/a jednoczeście Usługodawcą, miejsce wykonywania działalności: ul. Chwałowicka 27e/9, adres do doręczeń: ul. Chwałowicka 27e/9, NIP: 6423240217, REGON: 523231654, adres poczty elektronicznej (e-mail): biuro@nowewolo.pl, zwany/a dalej "Administratorem".
                            </li>
                            <li>
                               Dane osobowe zbierane przez Administratora za pośrednictwem strony internetowej są przetwarzane zgodnie z&nbsp;Rozporządzeniem Parlamentu Europejskiego i&nbsp;Rady (UE) 2016/679 z&nbsp;dnia 27 kwietnia 2016 r. w&nbsp;sprawie ochrony osób fizycznych w&nbsp;związku z&nbsp;przetwarzaniem danych osobowych i&nbsp;w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (ogólne rozporządzenie o&nbsp;ochronie danych), zwane dalej RODO oraz ustawą o ochronie danych osobowych z dnia 10 maja 2018 r.
                            </li>
                        </ol>
                    </li>

                    <li>
                       <h4>RODZAJ PRZETWARZANYCH DANYCH OSOBOWYCH, CEL I ZAKRES ZBIERANIA DANYCH</h4>
                        <ol>
                            <li><strong>CEL PRZETWARZANIA I PODSTAWA PRAWNA.</strong> Administrator przetwarza dane osobowe za pośrednictwem strony <strong>https://nowewolo.pl</strong> w przypadku:
                                <ol style="list-style:lower-alpha">
                                    <li>skorzystania przez użytkownika z formularza kontaktowego. Dane osobowe są przetwarzane na podstawie art. 6 ust. 1 lit. f) RODO jako prawnie usprawiedliwiony interes Administratora.</li>
                                </ol>
                            </li>
                            <li><strong>RODZAJ PRZETWARZANYCH DANYCH OSOBOWYCH. </strong>Administrator przetwarza następujące kategorie danych osobowych użytkownika:
                                <ol style="list-style:lower-alpha">

                                <li>Imię i nazwisko, </li><li>Adres e-mail, </li>
                                </ol>
                            </li>
                            <li><strong>OKRES ARCHIWIZACJI DANYCH OSOBOWYCH.</strong> Dane osobowe użytkowników przechowywane są przez Administratora:
                                <ol style="list-style:lower-alpha">
                                    <li>w przypadku, gdy podstawą przetwarzania danych jest wykonanie umowy, tak długo, jak jest to niezbędne do wykonania umowy, a&nbsp;po tym czasie przez okres odpowiadający okresowi przedawnienia roszczeń. Jeżeli przepis szczególny nie stanowi inaczej, termin przedawnienia wynosi lat sześć, a&nbsp;dla roszczeń o&nbsp;świadczenia okresowe oraz roszczeń związanych z&nbsp;prowadzeniem działalności gospodarczej - trzy lata.</li>
                                    <li>w przypadku, gdy podstawą przetwarzania danych jest zgoda, tak długo, aż zgoda nie zostanie odwołana, a&nbsp;po odwołaniu zgody przez okres czasu odpowiadający okresowi przedawnienia roszczeń jakie może podnosić Administrator i&nbsp;jakie mogą być podnoszone wobec niego. Jeżeli przepis szczególny nie stanowi inaczej, termin przedawnienia wynosi lat sześć, a&nbsp;dla roszczeń o&nbsp;świadczenia okresowe oraz roszczeń związanych z&nbsp;prowadzeniem działalności gospodarczej - trzy lata.</li>
                                </ol>
                            </li>
                            <li>Podczas korzystania ze strony internetowej mogą być pobierane dodatkowe informacje, w&nbsp;szczególności: adres IP przypisany do komputera użytkownika lub zewnętrzny adres IP dostawcy Internetu, nazwa domeny, rodzaj przeglądarki, czas dostępu, typ systemu operacyjnego.</li>
                            <li>Od użytkowników mogą być także gromadzone dane nawigacyjne, w&nbsp;tym informacje o&nbsp;linkach i&nbsp;odnośnikach, w&nbsp;które zdecydują się kliknąć lub innych czynnościach, podejmowanych na stronie internetowej. Podstawą prawną tego rodzaju czynności jest prawnie uzasadniony interes Administratora (art. 6 ust. 1 lit. f RODO), polegający na ułatwieniu korzystania z&nbsp;usług świadczonych drogą elektroniczną oraz na poprawie funkcjonalności tych usług.</li>
                            <li>Podanie danych osobowych przez użytkownika jest dobrowolne.</li>
                            <li>Dane osobowe będą przetwarzane także w sposób zautomatyzowany w formie profilowania, o ile użytkownik wyrazi na to zgodę na podstawie art. 6 ust. 1 lit. a) RODO. Konsekwencją profilowania będzie przypisanie danej osobie profilu w celu podejmowania dotyczących jej decyzji bądź analizy lub przewidywania jej preferencji, zachowań i postaw.</li>
                            <li>Administrator dokłada szczególnej staranności w celu ochrony interesów osób, których dane dotyczą, a w szczególności zapewnia, że zbierane przez niego dane są:
                                <ol style="list-style:lower-alpha">
                                    <li>przetwarzane zgodnie z prawem, </li>
                                    <li>zbierane dla oznaczonych, zgodnych z prawem celów i niepoddawane dalszemu przetwarzaniu niezgodnemu z tymi celami,</li>
                                    <li>merytorycznie poprawne i adekwatne w stosunku do celów, w jakich są przetwarzane oraz przechowywane w postaci umożliwiającej identyfikację osób, których dotyczą, nie dłużej niż jest to niezbędne do osiągnięcia celu przetwarzania.</li>
                                </ol>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <h4>UDOSTĘPNIENIE DANYCH OSOBOWYCH</h4>
                        <ol>
                            <li>Dane osobowe użytkowników przekazywane są dostawcom usług, z&nbsp;których korzysta Administrator przy prowadzeniu strony internetowej. Dostawcy usług, którym przekazywane są dane osobowe, w&nbsp;zależności od uzgodnień umownych i&nbsp;okoliczności, albo podlegają poleceniom Administratora co do celów i&nbsp;sposobów przetwarzania tych danych (podmioty przetwarzające) albo samodzielnie określają cele i&nbsp;sposoby ich przetwarzania (administratorzy).</li>
                            <li>Dane osobowe użytkowników są przechowywane wyłącznie na terenie Europejskiego Obszaru Gospodarczego (EOG).</li>
                        </ol>
                    </li>

                    <li>
                        <h4>PRAWO KONTROLI, DOSTĘPU DO TREŚCI WŁASNYCH DANYCH ORAZ ICH POPRAWIANIA</h4>
                        <ol>
                            <li>Osoba, której dane dotyczą, ma prawo dostępu do treści swoich danych osobowych oraz prawo ich sprostowania, usunięcia, ograniczenia przetwarzania, prawo do przenoszenia danych, prawo wniesienia sprzeciwu, prawo do cofnięcia zgody w dowolnym momencie bez wpływu na zgodność z prawem przetwarzania, którego dokonano na podstawie zgody przed jej cofnięciem.</li>
                            <li>Podstawy prawne żądania użytkownika:
                                <ol style="list-style:lower-alpha">
                                    <li><strong>Dostęp do danych</strong> – art. 15 RODO</li>
                                    <li><strong>Sprostowanie danych</strong> – art. 16 RODO.</li>
                                    <li><strong>Usunięcie danych (tzw. prawo do bycia zapomnianym)</strong> – art. 17 RODO.</li>
                                    <li><strong>Ograniczenie przetwarzania</strong> – art. 18 RODO.</li>
                                    <li><strong>Przeniesienie danych</strong> – art. 20 RODO.</li>
                                    <li><strong>Sprzeciw</strong> – art. 21 RODO</li>
                                    <li><strong>Cofnięcie zgody</strong> – art. 7 ust. 3 RODO.</li>
                                </ol>
                            </li><li>W celu realizacji uprawnień, o których mowa w pkt 2 można wysłać stosowną wiadomość e-mail na adres: biuro@nowewolo.pl.</li>
                            <li>W sytuacji wystąpienia przez użytkownika z&nbsp;uprawnieniem wynikającym z&nbsp;powyższych praw, Administrator spełnia żądanie albo odmawia jego spełnienia niezwłocznie, nie później jednak niż w&nbsp;ciągu miesiąca po jego otrzymaniu. Jeżeli jednak - z&nbsp;uwagi na skomplikowany charakter żądania lub liczbę żądań – Administrator nie będzie mógł spełnić żądania w&nbsp;ciągu miesiąca, spełni je w&nbsp;ciągu kolejnych dwóch miesięcy informując użytkownika uprzednio w&nbsp;terminie miesiąca od otrzymania żądania - o&nbsp;zamierzonym przedłużeniu terminu oraz jego przyczynach.</li>
                            <li>W przypadku stwierdzenia, że przetwarzanie danych osobowych narusza przepisy RODO, osoba, której dane dotyczą, ma prawo wnieść skargę do Prezesa Urzędu Ochrony Danych Osobowych.</li>
                        </ol>
                    </li>


                    <li>
                        <h4>PLIKI "COOKIES"</h4>
                        <ol>

                                <li>Strona Administratora&nbsp;używa plików&nbsp;„cookies”.</li>
                                <li>Instalacja plików „cookies” jest konieczna do prawidłowego świadczenia usług na stronie internetowej. W plikach „cookies" znajdują się informacje niezbędne do prawidłowego funkcjonowania strony, a także dają one także możliwość opracowywania ogólnych statystyk odwiedzin strony internetowej.</li>
                                <li>W ramach strony stosowane są rodzaje plików "cookies":

                                    stałe
                                    <ol style="    list-style: lower-alpha;">
                                        <li>„Stałe” pliki „cookies” przechowywane są w urządzeniu końcowym użytkownika przez czas określony w parametrach plików „cookies” lub do czasu ich usunięcia przez użytkownika.</li>					</ol>
                                </li>
                                <li>Administrator wykorzystuje własne pliki cookies w celu lepszego poznania sposobu interakcji użytkownika w zakresie zawartości strony. Pliki gromadzą informacje o sposobie korzystania ze strony internetowej przez użytkownika, typie strony, z jakiej użytkownik został przekierowany oraz liczbie odwiedzin i czasie wizyty użytkownika na stronie internetowej. Informacje te nie rejestrują konkretnych danych osobowych użytkownika, lecz służą do opracowania statystyk korzystania ze strony.</li>
                                <li>Użytkownik ma prawo zadecydowania w zakresie dostępu plików „cookies” do swojego komputera poprzez ich uprzedni wybór w oknie swojej przeglądarki. &nbsp;Szczegółowe informacje o możliwości i sposobach obsługi plików „cookies” dostępne są w ustawieniach oprogramowania (przeglądarki internetowej).</li>

                        </ol>
                    </li>

                    <li>
                        <h4>POSTANOWIENIA KOŃCOWE</h4>
                        <ol>
                            <li>Administrator stosuje środki techniczne i organizacyjne zapewniające ochronę przetwarzanych danych osobowych odpowiednią do zagrożeń oraz kategorii danych objętych ochroną, a w szczególności zabezpiecza dane przed ich udostępnieniem osobom nieupoważnionym, zabraniem przez osobę nieuprawnioną, przetwarzaniem z naruszeniem obowiązujących przepisów oraz zmianą, utratą, uszkodzeniem lub zniszczeniem.</li>
                            <li>Administrator udostępnia odpowiednie środki techniczne zapobiegające pozyskiwaniu i modyfikowaniu przez osoby nieuprawnione, danych osobowych przesyłanych drogą elektroniczną.</li>
                            <li>W sprawach nieuregulowanych niniejszą Polityką prywatności stosuje się odpowiednio przepisy RODO oraz inne właściwe przepisy prawa polskiego.</li>
                        </ol>
                    </li>
                </ol>
            </div>
        </div>
        </div>

      </section>

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Skontaktuj się z nami</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Stowarzyszenie Nowe Wolo</h3>
              <p>NIP: 6423240217 <br> REGON: 523231654</p>
              <p>@lang('Stowarzyszenie jest zarejestrowane w rejestrze stowarzyszeń zwykłych miasta Rybnik.')</p>
              <div class="social-links">
                {{-- <a href="#" class="twitter d-none"><i class="bi bi-twitter"></i></a> --}}
                <a href="https://facebook.com/nowewolo" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/nowewolo" class="instagram"><i class="bi bi-instagram"></i></a>
                {{-- <a href="#" class="linkedin d-none"><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>@lang('Adres korespodencyjny:')<br>ul. Chwałowicka 27e/9 <br>44-200 Rybnik</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p><a href="mailto:biuro@nowewolo.pl">biuro@nowewolo.pl</a></p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p><a href="tel:+48530403181">+48 530 403 181</a></p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
              @if (session('sent_message') == true)
              <div class="alert alert-success alert-dismissible" role="alert">
                <div>@lang('Wiadomość została wysłana! Dziękujemy.')</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
            <form action="{{ route('home.send-message') }}" method="post" role="form">
                @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="@lang('Twoje imię i nazwisko')" max="255" required>
                @error('name')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="@lang('Twój email')" max="255" required>
                @error('email')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="@lang('Temat')" max="255" required>
                @error('subject')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="@lang('wiadomość')" style="resize: none;" maxlength="255" required></textarea>
                <small>@lang('Maksymalnie 255 znaków')</small>
                @error('message')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <input type="checkbox" name="check" id="check" required>
                <label class="" for="check">@lang('Akceptuję') <a href="{{ route('home.privacy-policy') }}">@lang('politykę prywatności')</a></label>
              </div>

              <div class="text-center"><button class="btn-submit" type="submit">@lang('Wyślij wiadomość')</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            2022 - {{ date('Y') }} &copy; <strong>Stowarzyszenie Nowe Wolo</strong>. All Rights Reserved
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">@lang('Strona główna')</a>
            <a href="#about" class="scrollto">@lang('O nas')</a>
            <a href="{{ route('home.privacy-policy') }}">@lang('Polityka prywatności')</a>
            <a href="#">@lang('Regulamin stowarzyszenia')</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>

@endsection
