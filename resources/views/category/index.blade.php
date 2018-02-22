<table class="table table-bordered">

@foreach ($data as $category)
<tr>
	<td>
		{{ $category->name }}
	</td>
</tr>

@endforeach
</table>