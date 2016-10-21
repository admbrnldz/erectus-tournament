<div>
		<table class="table">
			<thead>
				<tr>
					<th class="text-center">Rank</th>
					<th>Player Name</th>
					<th class="text-right">Total Points</th>
					<th class="text-center">Coordinates</th>
					<th>Alliance</th>
				</tr>	
			</thead>
			<tbody>
				<?php $rank_number = 0; ?>
				@foreach ($data as $datum)
				<?php $rank_number++; ?>
				<tr>
					<td class="text-center">{{ $rank_number }}</td>
					<td>{{ $datum['name'] }}</td>
					<td class="text-right">{{ $datum['rank_total'] }}</td>
					<td class="text-center">{{ $datum['x'] . ' | ' . $datum['y'] }}</td>
					<td>{{ $datum['alliance_name'] != '' ? $datum['alliance_name'] : 'NONE' }}</td>
				</tr>
				@endforeach
			</tbody>		
		</table>
</div>
