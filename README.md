# laravel-bootstrap

Pacote para criação de interface usando PHP e bootstrap

[![license](https://img.shields.io/github/license/mashape/apistatus.svg)]()

# Instalação

Instalando via composer

<pre>composer require firmino/bootstrap</pre>

Registre o ServiceProvider em <i>config/app.php</i> 

```php
'providers' => [
      Firmino\Bootstrap\Providers\BootstrapServiceProvider::class,
]
```

Registre também os Facades no mesmo arquivo 

```php
'aliases' => [
      'Formulario' => Firmino\Bootstrap\Facades\Formulario::class,
      'HTML' => Firmino\Bootstrap\Facades\Html::class,
]
```

# Classe Formulario

<h3>Exemplo de input tipo text</h3>
```php 
Formulario::text(array(
        'label' => 'texto',
        'name' => 'texto',
        'value' => 'Valor do campo'  // opcional,
        'hidden' => true // opcional (true deixa o campo invisível)
))
```

<h3>Exemplo de input tipo select</h3>
```php 
Formulario::select(array(
        'label' => 'Selecion a operadora',
        'name' => 'operadora',
        'multiple' => true, // opicional. habilita o select multiple
        'options' => array(
            ['oi', 'OI'],
            ['vivo', 'Vivo', true], // o terceiro parametro marca o item como selecionado
            ['tim', 'Tim']
        )
))  
```

 <h3>Exemplo de input tipo textarea</h3>
```php 
Formulario::textarea(array(
        'label' => 'textarea',
        'name' => 'textarea',
        'rows' => 7,
        'value' => 'valor do campo' // opicional
))
```

 <h3>Exemplo de input tipo file</h3>
```php
Formulario::file(array(
        'name' => 'File'
))
```

 <h3>Exemplo de input tipo checkbox</h3>
```php
Formulario::checkbox(array(
        'label' => 'Confirmar presencao',
        'name' => 'checkbox',
        'checked' => false
))
```




