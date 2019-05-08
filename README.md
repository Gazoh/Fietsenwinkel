# Hoe compile je (SCSS/SASS) naar CSS
Om te kunnen compilen moet je het volgende downloaden:

#### NPM 
```
https://nodejs.org/en/download/
```

Zodra je NodeJS hebt gedownload moet je SCSS/SASS downloaden dus ga naar je CMD(Command Prompt) en Kopier je de volgende:
```
npm install -g sass
```

#### Ennu het compilen
In de folder * **Fietsenwinkel\Backend\CSS** * zie je **BackendCSS.scss** om die te compilen ga je terug naar je CMD en ga je naar
het CSS mapje dus
```
CD ../Fietsenwinkel\Backend\CSS
```
en typ je het volgende
```
sass --watch BackendCSS.scss:BackendCSS.css
```


