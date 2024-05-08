@extends('Layout.main')
@section('konten')
<div class="col-6 m-auto">
    <div class="mb-3">
        <label class="form-label" for="text_input">Text Input</label>
        <input type="text" class="form-control" name="text_input" placeholder="Text">
    </div>
    <div class="mb-3">
        <label class="form-label" for="text-input">Select Option</label>
        <select class="form-select" name="select_option">
            <option selected disabled>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </div>
    <div class="mb-3">
        <label class="form-label" for="text-input">Checkbox Button</label>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox" value="checkboxDefault">
            <label class="form-check-label" for="checkboxDefault">
                Default checkbox
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="checkbox" name="checkbox" value="checkboxChecked" id="checkboxChecked">
            <label class="form-check-label" for="checkboxChecked">
                Checked checkbox
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="text-input">Radio Button</label>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio_input" value="radioDefault">
            <label class="form-check-label" for="radioDefault">
                Default radio
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="radio_input" value="radioChecked">
            <label class="form-check-label" for="radioChecked">
                Default checked radio
            </label>
        </div>
    </div>
    <div class="mb-3">
        <label class="form-label" for="date">Date Picker</label>
        <input type="date" class="form-control" name="date" id="date">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Default file input</label>
        <input class="form-control" type="file" name="file">
    </div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Launch demo modal
    </button>
    <button type="button" class="btn btn-warning" onclick="alert('Alert!')">Show live alert!</button>
    <button type="button" class="btn btn-danger" onclick="confirm('Confirm?')">Show live Confirm?</button>
    <a href="{{ route("crud.index") }}" class="btn btn-info my-3">Crud</a>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5">Modal title</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label" for="text_input">Text Input</label>
                    <input type="text" class="form-control" name="text_input" placeholder="Text">
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
@endsection





