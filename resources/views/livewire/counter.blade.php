<div>
    <div style="margin-top: 24px;">

        <div>
            <h2>sl-button</h2>
            <sl-button wire:click="increment" @ifDefined('disabled', $count> 99)>+</sl-button>
            <sl-button wire:click="decrement" @ifDefined('disabled', $count < 1)>-</sl-button>
            <p>
                <sl-progress-bar value={{ $count }} label="Upload progress"></sl-progress-bar>
            </p>
            <p>Result: <strong>{{ $count }}</strong></p>
        </div>
        <div>
            <h2>sl-input</h2>
            <sl-input wire:model.live='input'></sl-input>
            <p>Result: <strong>{{ $input }}</strong></p>
        </div>
        <div>
            <h2>sl-textarea</h2>
            <sl-textarea wire:model.live='textarea'></sl-textarea>
            <p>Result: <strong>{{ $textarea }}</strong></p>
        </div>
        <div>
            <h2>sl-checkbox</h2>
            <sl-checkbox @slCheckboxModel('checkbox', $checkbox)>Checkbox
            </sl-checkbox>
            <p>Result: <strong>{{ $checkbox ? 'true' : 'false' }}</strong></p>
        </div>
        <div>
            <h2>sl-select</h2>
            <div>
                <sl-select @slSelectModel('selected', $selected)>
                    <sl-option value="1">Option 1</sl-option>
                    <sl-option value="2">Option 2</sl-option>
                    <sl-option value="3">Option 3</sl-option>
                </sl-select>
            </div>
            <p>Result: <strong>{{ $selected }}</strong></p>
        </div>
        <div>
            <h2>sl-select (multiple)</h2>
            <sl-select @slSelectModel('multipleSelected', $multipleSelected) multiple>
                <sl-option value="1">
                    Option 1</sl-option>
                <sl-option value="2">Option 2</sl-option>
                <sl-option value="3">Option 3</sl-option>
            </sl-select>
            <p>Result: <strong>{{ implode(', ', $multipleSelected) }}</strong></p>
        </div>
        <div>
            <h2>sl-radio-group</h2>
            <sl-radio-group @slRadioGroupModel('radio', $radio)>
                <sl-radio value="1">Option 1</sl-radio>
                <sl-radio value="2">Option 2</sl-radio>
                <sl-radio value="3">Option 3</sl-radio>
            </sl-radio-group>
            <p>Result: <strong>{{ $radio }}</strong></p>
        </div>
    </div>
</div>
