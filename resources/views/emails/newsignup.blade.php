<html>
<head></head>
<body style="background: white; color: black; font-family: Helvetica, Arial, sans-serif, Verdana, Abel;">
<h1>Hej {{$person->name}}</h1>

<p>
Tak for din tilmelding som medhjælper til FDF og Spejderne i Tivoli - Splittet af Dimensioner.
</p>
<p>
Nedenfor finder du en kopi af dine indtastninger.
</p>

<p>
Vi regner med at du er tilstede til de vagter du har angivet. Arrangementet fungere kun hvis alle møder op.
</p>

<p>
Skulle noget ændre sig  inden arrangemnetet kan du indtil onsdag d. 12 september ændre dine vagter på følgende link:
</p>
<a href="{{ URL::to('/person/' . $person->id) }}"> {{ URL::to('/person/' . $person->id) }}</a>

<p>
Efter denne dato kan du kun lave ændringer ved at kontakte Daniel Graungaard personligt på 60860004.
</p>
<p>
Har du taget vagter lørdag inden kl 12 er der medhjælper briefing i parken kl 9.
</p>
<p>
Vi mangler stadig folk til fredag, så hvis du på nogen måde har mulighed for at møde op denne dag vil din tilstedeværelse være værdsat!
</p>
<p>
En email med flere prakriske oplysninger ifht til mødested og tidspunkt vil blive sendt ud en uge inden arrangementet.
</p>
<p>
Har du spørgsmål er du altid velkommen til at kontakte medarbejderansvarlig Daniel Graungaard på TLF: 60860004, eller på <a href="mailto:daniel@graungaard.com">daniel@graungaard.com</a>
</p>

</body>
</html>