<div>
    <div style="margin-top: 24px;">
        <h2>sl-button</h2>
        <sl-button wire:click="increment" {{ $count > 99 ? 'disabled' : '!disabled' }}>+</sl-button>
        <sl-button wire:click="decrement" {{ $count < 1 ? 'disabled' : '!disabled' }}>-</sl-button>

        <p>Result: <strong>{{ $count }}</strong></p>
        <sl-progress-bar value={{ $count }} label="Upload progress"></sl-progress-bar>

        <h2>sl-checkbox</h2>
        <sl-checkbox {{ $checkbox ? 'checked' : '' }} x-on:sl-change="$wire.set('checkbox', $el.checked);">Checkbox
        </sl-checkbox>
        <p>Result: <strong>{{ $checkbox ? 'true' : 'false' }}</strong></p>

        <h2>sl-input</h2>
        <sl-input wire:model.live='input'></sl-input>

        <p>Result: <strong>{{ $input }}</strong></p>

        <h2>sl-select</h2>
        <div>
            <sl-select value="{{ $selected }}" x-on:sl-change="$wire.set('selected', $el.value);">
                <sl-option value="1">Option 1</sl-option>
                <sl-option value="2">Option 2</sl-option>
                <sl-option value="3">Option 3</sl-option>
            </sl-select>
        </div>

        <p>Result: <strong>{{ $selected }}</strong></p>

        <h2>sl-select (multiple)</h2>
        <sl-select value="{{ implode(' ', $multipleSelected) }}"
            x-on:sl-change="$wire.set('multipleSelected', $el.value);" multiple>
            <sl-option value="1">
                Option 1</sl-option>
            <sl-option value="2">Option 2</sl-option>
            <sl-option value="3">Option 3</sl-option>
        </sl-select>

        <p>Result: <strong>{{ implode(', ', $multipleSelected) }}</strong></p>

        <h2>sl-textarea</h2>
        <sl-textarea wire:model.live='textarea'></sl-textarea>

        <p>Result: <strong>{{ $textarea }}</strong></p>

        <h2>sl-radio-group</h2>

        <sl-radio-group value="{{ $radio }}" x-on:sl-change="$wire.set('radio', $el.value);">
            <sl-radio value="1">Option 1</sl-radio>
            <sl-radio value="2">Option 2</sl-radio>
            <sl-radio value="3">Option 3</sl-radio>
        </sl-radio-group>

        <p>Result: <strong>{{ $radio }}</strong></p>
    </div>
</div>
