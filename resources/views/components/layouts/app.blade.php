<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.2/cdn/themes/light.css" />
    <script type="module" src="https://cdn.jsdelivr.net/npm/@shoelace-style/shoelace@2.11.2/cdn/shoelace-autoloader.js"></script>
    <style>
        body {
            font-family: var(--sl-input-font-family);
            padding: 48px 32px;
            max-width: 1200px;
            margin: 0 auto;
        }

        sl-card,
        sl-card::part(base),
        sl-card::part(body) {
            height: 100%;
        }
    </style>
</head>

<body>
    {{ $slot }}
</body>

<script>
    Livewire.hook('morph.updating', ({
        el,
        component,
        toEl
    }) => {
        // Store the original attributes.
        let originalAttributes = Array.from(el.attributes)
            .reduce((attrs, attr) => {
                attrs[attr.name] = attr.value;
                return attrs;
            }, {});

        // Restore all attributes that might have been removed by Livewire.
        let currentAttributes = Array.from(toEl.attributes).map(attr => attr.name);
        Object.entries(originalAttributes).forEach(([name, value]) => {
            if (!name.startsWith('!') && !currentAttributes.includes(name)) {
                toEl.setAttribute(name, value);
            }
        });

        // Remove attributes starting with '!' from the `toEl`.
        Array.from(toEl.attributes).forEach(attr => {
            if (attr.name.startsWith('!')) {
                toEl.removeAttribute(attr.name.substring(
                    1)); // Remove the corresponding actual attribute.
                toEl.removeAttribute(attr
                    .name
                ); // Remove the attribute with the '!' prefix if it exists from initial render.
            }
        });
    });
</script>

</html>
