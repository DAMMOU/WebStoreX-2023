@if (config('frontend.custom_url.status') == 'on')
    <script type="text/javascript">
		window.location.href = "{{ config('frontend.custom_url.link') }}"
	</script>
@else
    <!DOCTYPE html>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        </head>
        <body>
        </body>
    </html>
@endif