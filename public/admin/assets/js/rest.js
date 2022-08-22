
	   
	   $.ajaxSetup({
            	headers: {'X-CSRF-Token': '{{csrf_token()}}'}
            });
		
		//var url = '{{url('/dropdown/all')}}';
		var url = "http://relation.test/dropdown/all";

		getRecords();

		function getRecords(){
			$.get(url)
				.done(function(data){
					var output = '';
					$.each(data, function(index, value){
						output += `<option value=${value.id}>${value.name}</option>`
					})
					
					$('#exampleFormControlSelect1').append(output);
				})
		}
		

		$('#exampleFormControlSelect1').change(function(){
			$('#state').val(null)
			var id = $(this).val()
			getallstate(id);
			getInput()
			
		})


		$('#state').change(function(){
			var state = $('#state :selected').val()
			getInput()
			
		})

		

		function getInput(){
			var country = $('#exampleFormControlSelect1 :selected').text()
			var state = $('#state :selected').text()
			
			addValue(country, state)
			return {country: country, state: state}
		}

		function addValue(country, state){
			
			$('#result').empty()

			var country_val = $('#exampleFormControlSelect1 :selected').val()
			var state_val = $('#state :selected').val()

			if (country_val != '' && state_val != '') {
				var result = `${country} - ${state}`;
				$('#result').append(result)

			}
		}

		function getallstate(id) {
			//var url = '{{url('/dropdown/all')}}';
			var url = "http://relation.test/dropdown/all";
			$.get(url + '/'+ id + '/state')
			.always(function(){
				$('#state').find('*').not('.not').remove()
				//$("#theDiv *:not('.className')").remove();
				})
			 .done(function(data){
				var output = ''
				$.each(data, function(index, value){
					output += `<option value=${value.id}>${value.name}</option>`
				})


				$('#state').append(output)
			})
		}


		function store(){
				if (!confirm('Are you sure')) return;
				var purl = '{{url('/dropdown/store')}}';
				$.ajax({
					method: 'POST',
					url: purl,
					data: getInput(),
					dataType: 'JSON',
					
				}).done(function(data){
					var output = '';
					console.log(data)
					$.each(data, function(index, value){
						output += `<li>${index} - ${value}</li>`;
					})

					//$('#result').append(output)

				})
			}

		
	
