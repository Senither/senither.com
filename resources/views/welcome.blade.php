<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Home | {{ "Alexis Tan's Portfolio" }}</title>

        <link href="https://fonts.googleapis.com/css?family=Maven+Pro:400,500,700|Encode+Sans:400,500,700|Oxygen+Mono" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css" rel="stylesheet">
        <link href="{{ mix('/css/style.css') }}" rel="stylesheet" type="text/css">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
        <div class="particles">
            <div class="intro">
                <div class="container">
                    <h1>Alexis Tan</h1>
                    <p class="lead">Software Developer and Web Application Programmer</p>
                    <h2 class="lead" style="margin-top: -10px; font-size: 28px;">
                        <i class="devicon-hover devicon-php-plain" data-toggle="tooltip" data-placement="bottom" title="PHP"></i>
                        <i class="devicon-hover devicon-java-plain" data-toggle="tooltip" data-placement="bottom" title="Java"></i>
                        <i class="devicon-hover devicon-html5-plain" data-toggle="tooltip" data-placement="bottom" title="HTML5"></i>
                        <i class="devicon-hover devicon-nodejs-plain" data-toggle="tooltip" data-placement="bottom" title="NodeJS"></i>
                        <i class="devicon-hover devicon-sass-plain" data-toggle="tooltip" data-placement="bottom" title="SASS"></i>
                        <i class="devicon-hover devicon-symfony-plain" data-toggle="tooltip" data-placement="bottom" title="Symfony"></i>
                        <i class="devicon-hover devicon-laravel-plain" data-toggle="tooltip" data-placement="bottom" title="Laravel PHP Framework"></i>
                        <i class="devicon-hover devicon-mysql-plain" data-toggle="tooltip" data-placement="bottom" title="MySQL"></i>
                        <i class="devicon-hover devicon-apache-plain" data-toggle="tooltip" data-placement="bottom" title="Apache"></i>
                        <i class="devicon-hover devicon-git-plain" data-toggle="tooltip" data-placement="bottom" title="Git"></i>
                        <i class="devicon-hover devicon-linux-plain" data-toggle="tooltip" data-placement="bottom" title="Linux"></i>
                    </h2>
                </div>

                <div class="container monofont" style="padding-top: 40px;">
                    @include('partials.item', ['name' => 'Recent Projects', 'key' => 'projects'])
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js" type="text/javascript"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="/js/jquery.particleground.min.js" type="text/javascript"></script>
        <script>
            $(function () {
                $('[data-toggle="tooltip"]').tooltip();
            });

            $('.particles').particleground({
                dotColor: '#7F8F91',
                lineColor: '#7F8F91',
                parallax: true,
                parallaxMultiplier: 15
            });

            $('a').each(() => {
                $(this).tooltip({placement: 'top'});
            });

            $('.devicon-hover').each(() => {
                $(this).tooltip({placement: 'bottom'});
            });
        </script>
    </body>
</html>
