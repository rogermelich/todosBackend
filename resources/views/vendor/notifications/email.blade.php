@component('mail::message')
    {{-- Greeting --}}
    @if (! empty($greeting))
        # {{ $greeting }}
    @else
        @if ($level == 'error')
            # Whoops!
        @else
            # Email Reset Password!
        @endif
    @endif

    You are receiving this email because we received a request to reset your account password.

    {{-- Action Button --}}
    @if (isset($actionText))
        <?php
        switch ($level) {
            case 'success':
                $color = 'green';
                break;
            case 'error':
                $color = 'red';
                break;
            default:
                $color = 'blue';
        }
        ?>
        @component('mail::button', ['url' => $actionUrl, 'color' => $color])
            {{ $actionText }}
        @endcomponent
    @endif

    Regards, {{config('app.name')}}


    @if (isset($actionText))
        @component('mail::subcopy')
            If you’re having trouble clicking the "{{ $actionText }}" button, copy and paste the URL below
            into your web browser: [{{ $actionUrl }}]({{ $actionUrl }})
        @endcomponent
    @endif
@endcomponent
