<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>email sender</title>

    {{-- pico.css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@1/css/pico.min.css">
</head>
<body>

    <main class="container">

        <article>
            <header>Laravel email sender package</header>

                @if ($errors->any())
                    <article>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li style="color: red;">{{ $error }}</li>
                            @endforeach
                        </ul>
                    </article>
                @endif

                @if (session('status'))
                    <article>
                        <p style="color: green;">email sended!</p>
                    </article>
                @endif

                <form action="{{ route('email_send') }}" method="POST">

                    @csrf

                    <label>Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}">
                    <small>recipient email address</small>

                    <label>Subject</label>
                    <input type="text" name="subject" value="{{ old('subject') }}">

                    <label>Body email</label>
                    <textarea name="body" cols="30" rows="6" style="resize: vertical;">{{ old('body') }}</textarea>

                    <!-- Button -->
                    <button type="submit">Submit</button>

                  </form>

            <footer>
                <a href="https://osonaweb.cat" target="_blank">
                    <img src="https://osonaweb.cat/assets/img/logo_osonaweb.png" alt="osonaweb.cat" style="max-width:200px;">
                </a>
            </footer>
        </article>

    </main>

</body>
</html>
