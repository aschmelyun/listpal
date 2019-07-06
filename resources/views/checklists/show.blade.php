@extends('app')
@section('content')
    <list-items :items="{{ json_encode($checklist->items) }}" :hash="'{{ $checklist->hash }}'"></list-items>
    <new-item v-if="showNewItem" @saved="handleSaveNewItem" @closed="handleCloseNewItem" :disabled="disableButtons"></new-item>
@endsection