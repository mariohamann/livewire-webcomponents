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
            background-color: var(--sl-color-neutral-100);
            font-family: var(--sl-input-font-family);
            padding: 48px 32px;
            max-width: 1200px;
            margin: 0 auto;
            opacity: 0;
        }

        body.ready {
            opacity: 1;
            transition: .25s opacity;
        }

        .cards {
            margin-top: 48px;
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 24px;
        }

        sl-card,
        sl-card::part(base),
        sl-card::part(body) {
            height: 100%;
        }
    </style>
    <script type="module">
  await Promise.allSettled([
    customElements.whenDefined('sl-card')
  ]);

  // Button, card, and rating are registered now! Add
  // the `ready` class so the UI fades in.
  document.body.classList.add('ready');
</script>
</head>

<body>
    <h1>Livewire x Web Components</h1>
    {{ $slot }}
</body>

<script>
    Livewire.hook('morph.updating', ({
        el,
        component,
        toEl
    }) => {
        // Store the original attributes.
        let oldAttributes = Array.from(el.attributes)
            .reduce((attrs, attr) => {
                attrs[attr.name] = attr.value;
                return attrs;
            }, {});

        // Restore all attributes that might have been removed by Livewire.
        let newAttributes = Array.from(toEl.attributes).map(attr => attr.name);
        Object.entries(oldAttributes).forEach(([name, value]) => {
            if (!name.startsWith('!') && !newAttributes.includes(name)) {
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
