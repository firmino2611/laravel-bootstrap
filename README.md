# laravel-bootstrap

Pacote para craicao de interface usando PHP e bootstrap

[![license](https://img.shields.io/github/license/mashape/apistatus.svg)]()

# Instalação

Instalando via composer

<pre>composer require firmino/bootstrap</pre>

Registre o ServiceProvider em <i>config/app.php</i> 

<pre>
'providers' => [
      Firmino\Bootstrap\Providers\BootstrapServiceProvider::class,
]
</pre>

Registre também os Facades no mesmo arquivo 

<pre>
'aliases' => [
      'Formulario' => Firmino\Bootstrap\Facades\Formulario::class,
      'HTML' => Firmino\Bootstrap\Facades\Html::class,
]
</pre>

# Classe Formulario

<h3>Exemplo de input tipo text</h3>
<pre> Formulario::text(array(
        'label' => 'texto',
        'name' => 'texto',
        'value' => 'Valor do campo'  // opcional
))</pre>

<h3>Exemplo de input tipo select</h3>
<pre> Formulario::select(array(
        'label' => 'Selecion a operadora',
        'name' => 'operadora',
        'multiple' => true, // opicional. habilita o select multiple
        'options' => array(
            ['oi', 'OI'],
            ['vivo', 'Vivo', true], // o terceiro parametro marca o item como selecionado
            ['tim', 'Tim']
        )
))  </pre>

 <h3>Exemplo de input tipo textarea</h3>
<pre> Formulario::textarea(array(
        'label' => 'textarea',
        'name' => 'textarea',
        'rows' => 7
))</pre>

 <h3>Exemplo de input tipo file</h3>
<pre> Formulario::file(array(
        'name' => 'File'
))</pre>

 <h3>Exemplo de input tipo checkbox</h3>
<pre> Formulario::checkbox(array(
        'label' => 'Confirmar presencao',
        'name' => 'checkbox',
        'checked' => false
))</pre>




