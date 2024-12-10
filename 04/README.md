> :white_check_mark: *Jeśli będziesz mieć problem z rozwiązaniem tego zadania, poproś o pomoc na odpowiednim kanale na Slacku, tj. `s5e02-php-dynamic-web-application` (dotyczy [mentee](https://devmentor.pl/mentoring-javascript/)) lub na ogólnodostępnej i bezpłatnej [społeczności na Discordzie](https://devmentor.pl/discord). Pamiętaj, aby treść Twojego wpisu spełniała [odpowiednie kryteria](https://devmentor.pl/jak-prosic-o-pomoc/).*

&nbsp;

# `#04` PHP: Dynamic Web Application

Napisz router, który pozwoli wczytywać konstroller po nazwie pobranej z adresu URL tj.
- / => index.controller.php
- /contact => contact.controller.php
- /about-me => about_me.controller.php

Pamiętaj, aby sprawdzić czy [plik istnieje](https://www.php.net/manual/en/function.file-exists.php). Jeśli nie to zwróć kod 404.

Dobrą praktyką będzie również używanie [ścieżki absolutnej](https://css-tricks.com/php-include-from-root/) oraz sprawdzenie czy adres url zawiera jedynie bezpieczne znaki np. `[a-z_-]`, aby nie narazić się na wczytanie dowolnego pliku.

Każdy z kontrolerów niech wyświetla jedynie nagłówek z nazwą danego kontrolera.


&nbsp;
> :no_entry: *Jeśli nie posiadasz materiałów do tego zadania tj. **Wideo**, znajdziesz je na stronie [laracasts.com](https://laracasts.com/referral/bogolubow)*

> :arrow_left: [*poprzednie zadanie*](./../03) | [*następne zadanie*](./../05) :arrow_right:
