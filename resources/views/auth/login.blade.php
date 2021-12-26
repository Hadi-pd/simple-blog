<x-app-layout>
<x-slot name="title">
    - صفحه ورود
</x-slot>
{{-- <main class="bg--white">
    <div class="container">
        <div class="sign-page">
            <h1 class="sign-page__title">ورود به وب‌سایت</h1>

            <form class="sign-page__form" action="{{ route('login.store') }}" method="POST">
                @csrf
                <input type="text" name="email" class="text text--left" placeholder="شماره یا ایمیل">
                @error('email')
                    <p style="margin-bottom: 1rem;
                            color: #D8000C;
                            text-align: right;"
                    >
                        {{ $message }}
                    </p>
                @enderror

                <input type="password" name="password" class="text text--left" placeholder="رمز عبور">
                @error('password')
                    <p style="margin-bottom: 1rem;
                            color: #D8000C;
                            text-align: right;"
                    >
                        {{ $message }}
                    </p>
                @enderror

                <label class="checkbox text--right">
                    <input type="checkbox" name="remember" class="checkbox__filter">
                    <span class="checkbox__mark position-relative"></span>
                    مرا بخاطر بسپار
                </label>
                <a class="recover-password" href="{{ route('password.request') }}">بازیابی رمز عبور</a>
                <button class="btn btn--blue btn--shadow-blue width-100" type="submit">ورود به سایت</button>
                <div class="sign-page__footer">
                    <span>کاربر جدید هستید؟</span>
                    <a href="{{ route('register') }}" class="color--46b2f0">صفحه ثبت نام</a>
                </div>
            </form>
        </div>
    </div>
</main> --}}


<form  class="sign-log-form-container colStart" action="{{ route('login.store') }}" method="POST">
    @csrf
    <label for="">ورود به سایت</label>
    <label for="">برای دانلود مجلات ام آی ابتدا بایستی وارد شوید</label>
    <input type="text" name="email" placeholder="ایمیل">
    @error('email')
    <p style="margin-bottom: 1rem;
            color: #D8000C;
            text-align: right;"
    >
        {{ $message }}
    </p>
@enderror
    <input type="password" name="password" placeholder="گذرواژه">
    @error('password')
    <p style="margin-bottom: 1rem;
            color: #D8000C;
            text-align: right;"
    >
        {{ $message }}
    </p>
@enderror

    <div class="rowBetCenter">
        <button type="submit">ورود</button>
        <a href="{{ route('register') }}" class="color--46b2f0">  
            <button>ثبت نام</button>
        </a>
    </div>
</form>


</x-app-layout>