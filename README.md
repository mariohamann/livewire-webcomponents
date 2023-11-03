# Livewire and Web Components Integration

## About

This repository showcases a practical solution for integrating [Livewire](https://laravel-livewire.com/) with Web Components, specifically utilizing [Shoelace Web Components](https://shoelace.style). It addresses the common challenge of maintaining styles and attributes in Web Components when they are dynamically updated by Livewire, a full-stack framework by Laravel.

The purpose of this integration is to leverage the great developer experience provided by Laravel and Livewire, alongside the wide compatibility and functionality of Web Components.

## Problems Solved

This project tackles several key issues:

-   **Style Persistence**: Ensures that Web Components like `<sl-button>` retain their styles after Livewire interactions.
-   **Attribute Retention**: Preserves custom attributes during Livewire's DOM diffing process, which would otherwise be stripped.
-   **Boolean Attribute Binding**: Implements a solution for correctly toggling boolean attributes (such as `disabled`) on Web Components within Livewire.
-   **Complex Form Handling**: Addresses the complexities of binding Livewire models to Web Components with ShadowDOM, such as `sl-radio-group`, `sl-checkbox`, and `sl-select`.

## Features

-   Demonstrates initial setup and tweaks needed for integration.
-   Provides Blade directives for cleaner Livewire and Web Component interactions.
-   Includes examples with form elements to handle various data-binding scenarios.

## Demo

A live demo of this integration can be seen here: [livewire-webcomponents.mariohamann.com](https://livewire-webcomponents.mariohamann.com)

## Complementary Article + Discussion

For an in-depth explanation and reflection on the process, challenges, and solutions for integrating Livewire with Web Components, check out the complementary [article on my website](https://mariohamann.com/livewire-web-components-attributes) and [discussion on Mastodon](https://indieweb.social/@mariohamann/111345589522474076)

## Contributing

Contributions to improve the integration or address additional problems are welcome. Please feel free to open an issue or submit a pull request.

## License

This project is open-sourced under the [MIT license](LICENSE.md).
