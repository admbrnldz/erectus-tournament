<div>
		<table class="table">
			<thead>
				<tr>
					<th class="text-center">Rank</th>
					<th>Alliance Name</th>
					<th class="text-right">Total Points</th>
				</tr>	
			</thead>
			<tbody>
				<?php $rank_number = 0; ?>
				@foreach ($data as $datum)
				<?php $rank_number++; ?>
				<tr>
					<td class="text-center">{{ $rank_number }}</td>
					<td>{{ $datum['alliance_name'] }}</td>
					<td class="text-right">{{ $datum['total'] }}</td>
				</tr>
				@endforeach
			</tbody>		
		</table>
</div>
