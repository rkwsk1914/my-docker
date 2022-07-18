@php
$path = resource_path('views/work/*');
$files = glob($path);

function create_url($file)
{
    $file_path = Str::replaceFirst('/var/www/html/resources/views/', '', $file);
    $dir = Str::replacelast('index.blade.php', '', $file_path);
    $url = url($dir);
    return $url;
}

function get_meta_info($file)
{
    $url = create_url($file);
    #$file_path = Str::replaceFirst('/var/www/html/resources/views/', '', $file);
    $dir = Str::replacelast('index.blade.php', '', $file);
    $meta_url = Str::replaceFirst('http://localhost', 'http://127.0.0.1', $url);
    #return $dir;
    return get_meta_tags($meta_url);
}

@endphp
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <title>Ryo Kawasaki </title>
    <meta name="description" content="Kawasaki Ryo">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href={{ asset('assets/common/css/common.css') }}>
</head>

<body>

    @component('components.header')
    @endcomponent

    <article class="py-5">
        <h1 class="text-center h1">
            WORK
        </h1>

        <section class="container">
            <div class="row">

            </div>
        </section>
    </article>

    @component('components.footer')
    @endcomponent

    <footer class="p-3" style="background-color: #e3f2fd;">
    </footer>

    <script src={{ asset('assets/common/js/common.js') }}></script>
</body>

</html>
