<div>
    <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 24px;">
        <sl-card>
            <h2>sl-button</h2>
            <sl-button wire:click="increment" @wcSetAttribute('disabled', $count > 99)>+</sl-button>
            <sl-button wire:click="decrement" @wcSetAttribute('disabled', $count < 1)>-</sl-button>
            <p>
                <sl-progress-bar value={{ $count }} label="Upload progress"></sl-progress-bar>
            </p>
            <p slot="footer">Server result: <strong>{{ $count }}</strong></p>
        </sl-card>
        <sl-card>
            <h2>sl-input</h2>
            <sl-input wire:model.live='input'></sl-input>
            <p slot="footer">Server result: <strong>{{ $input }}</strong></p>
        </sl-card>
        <sl-card>
            <h2>sl-textarea</h2>
            <sl-textarea wire:model.live='textarea'></sl-textarea>
            <p slot="footer">Server result: <strong>{{ $textarea }}</strong></p>
        </sl-card>
        <sl-card>
            <h2>sl-checkbox</h2>
            <sl-checkbox @slCheckboxModel('checkbox', $checkbox)>Checkbox
            </sl-checkbox>
            <p slot="footer">Server result: <strong>{{ $checkbox ? 'true' : 'false' }}</strong></p>
        </sl-card>
        <sl-card>
            <h2>sl-select</h2>
            <div>
                <sl-select @slSelectModel('selected', $selected)>
                    <sl-option value="1">Option 1</sl-option>
                    <sl-option value="2">Option 2</sl-option>
                    <sl-option value="3">Option 3</sl-option>
                </sl-select>
            </div>
            <p slot="footer">Server result: <strong>{{ $selected }}</strong></p>
        </sl-card>
        <sl-card>
            <h2>sl-select (multiple)</h2>
            <sl-select @slSelectModel('multipleSelected', $multipleSelected) multiple>
                <sl-option value="1">
                    Option 1</sl-option>
                <sl-option value="2">Option 2</sl-option>
                <sl-option value="3">Option 3</sl-option>
            </sl-select>
            <p slot="footer">Server result: <strong>{{ implode(', ', $multipleSelected) }}</strong></p>
        </sl-card>
        <sl-card>
            <h2>sl-radio-group</h2>
            <sl-radio-group @slRadioGroupModel('radio', $radio)>
                <sl-radio value="1">Option 1</sl-radio>
                <sl-radio value="2">Option 2</sl-radio>
                <sl-radio value="3">Option 3</sl-radio>
            </sl-radio-group>
            <p slot="footer">Server result: <strong>{{ $radio }}</strong></p>
        </sl-card>
    </div>
</div>
