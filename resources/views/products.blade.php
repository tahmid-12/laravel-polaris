@extends('layouts')

@section('content')
<div class="Polaris-Page" style="background-color: #f4f6f8; padding: 20px; border-radius: 8px;">
  <div class="Polaris-Page__Content">
    <form method="POST" action="{{ route('product.store') }}" style="max-width: 600px; margin: auto;">
      @csrf
      <div class="Polaris-FormLayout">
        <div class="Polaris-FormLayout__Item">
          <div class="Polaris-TextField" style="margin-bottom: 16px;">
            <input name="title" value="{{ old('title') }}" class="Polaris-TextField__Input" placeholder="Product Title">
            @error('title')
              <div class="Polaris-InlineError" style="color: #bf0711;">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="Polaris-FormLayout__Item">
          <textarea name="description" class="Polaris-TextField__Input" placeholder="Description" style="margin-bottom: 16px;">{{ old('description') }}</textarea>
          @error('description')
            <div class="Polaris-InlineError" style="color: #bf0711;">{{ $message }}</div>
          @enderror
        </div>

        <div class="Polaris-FormLayout__Item">
          <div class="Polaris-TextField" style="margin-bottom: 16px;">
            <input name="price" value="{{ old('price') }}" class="Polaris-TextField__Input" type="number" step="0.01" placeholder="Price">
            @error('price')
              <div class="Polaris-InlineError" style="color: #bf0711;">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="Polaris-FormLayout__Item">
          <div class="Polaris-TextField" style="margin-bottom: 16px;">
            <input name="type" value="{{ old('type') }}" class="Polaris-TextField__Input" placeholder="Product Type">
            @error('type')
              <div class="Polaris-InlineError" style="color: #bf0711;">{{ $message }}</div>
            @enderror
          </div>
        </div>

        <div class="Polaris-FormLayout__Item">
          <button type="submit" class="Polaris-Button" style="background-color: #008060; color: #fff; border: none; padding: 10px 16px; border-radius: 4px; font-size: 16px;">Create Product</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection
