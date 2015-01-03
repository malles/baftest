#Bixie Development omgeving

##Baftest

**Howto aandepraat te krijgen**

_Hebbon_

* [Vagrant](https://www.vagrantup.com) en [VirtualBox](https://www.virtualbox.org/wiki/Downloads).

Optioneel

* [Github](https://windows.github.com) voor Windows
* [Node.js](http://nodejs.org) en [Grunt](http://gruntjs.com)
* [PHPStorm](https://www.jetbrains.com/phpstorm/).

_Doen_

* Download/clone repo vanuit [Github](https://github.com/malles/baftest) naar je projectmap.
* Ga naar [Puphpet](https://puphpet.com) en plak de inhoud van je `config.yaml` daar in.
* Create en download `puphpet.zip` in de rootmap.
* Pak inhoud van de random dir in de zip uit in de rootmap. Overschijf de `.gitattributes`, `Vagrantfile` en `config.yaml`.
* Time to `vagrant up`! Via windows console of PHPStorm. (vergeet de kop koffie niet!)
* .....omnomnom....
* De mappen `html` en `default` zijn aangemaakt. `default` is de map die de site is.
* Voeg regel `192.168.56.101 baftest.dev www.baftest.dev` toe aan `C:\Windows\System32\drivers\etc\hosts`
* Ga naar `www.baftest.dev` in je browser, en watch the beast come alive.
