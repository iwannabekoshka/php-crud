const tbody = document.querySelector('tbody');

fetch('getTable.php')
	.then(response => {
		return response.json()
	})
	.then(data => {
		data.forEach(row => {
			const tableRow =
				`<tr>
					<td>${row.name}</td>
					<td>${row.color}</td>
					<td></td>
				</tr>`
			tbody.insertAdjacentHTML('beforeend' ,tableRow)
		})
	})
