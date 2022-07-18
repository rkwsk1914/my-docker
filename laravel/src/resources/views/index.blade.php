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
            TOP
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
