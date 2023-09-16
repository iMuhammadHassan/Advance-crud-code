<div class="mb-3">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" name={{ $name }} class="form-control" id="{{ $id }}"
        placeholder="{{ $placeholder }}">
</div>
<style>
    ::placeholder {
        color: lightblue;
        font-size: 15px;
        font-style: italic;
        font-weight: 200
    }
</style>
