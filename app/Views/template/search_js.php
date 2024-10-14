    function sortSurat(){
    $('#sort-surat').on('change', function() {
        const sort = this.value;
        const kat1  = $('#kat1-surat').val();
        const kat2  = $('#kat2-surat').val(); 
        const bulan  = $('#sort-bulan').val();  
        const tahun  = $('#sort-tahun').val();             
        //const search  = $("#search-surat input[name=q]").val();        

        // build url
        let build_url;

        if (/*search.length > 0 ||*/ kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) {
            build_url = base_url + '&sort=' + sort+ /*'?q=' + search +*/ '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun;
        }else{
            build_url = base_url + '?sort=' + sort;
        }
        /*
        if (search.length > 0) {
            build_url = base_url + '?q=' + search +'&sort=' + sort;
        }else if (kat1.length > 0) {
            build_url = base_url + '?kat1=' + kat1 +'&sort=' + sort;
        }else{
            build_url = base_url + '?sort=' + sort;
        }*/

        // placeholder
        suratPlaceholder();
        
        $.ajax({
            url: build_url,
            type: 'POST',
            dataType: 'JSON',
            success: function(data) {

                // change title
                document.title = data.title;

                // change url history
                history.pushState({}, data.title, build_url);
                //history.pushState({}, build_url);

                // refresh data
                $('#main-surat').html(data.content);

                // re-init because its refresh DOM 
                sortSurat();
                kat1Surat();
                kat2Surat();
                bulanSurat();
                tahunSurat();
                PaginationAjax();

            },error: function(xhr, statusText, errorThrown) {
                alert(statusText);
            }
        });
    });        
    }

    // init sortSurat
    sortSurat();

    function kat1Surat(){
        $('#kat1-surat').on('change', function() {
            const kat1 = this.value;
            const sort  = $('#sort-surat').val();
            const kat2  = $('#kat2-surat').val(); 
            const bulan  = $('#sort-bulan').val();  
            const tahun  = $('#sort-tahun').val();
            const build_url = (kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) ? base_url + '&sort=' + sort + '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun : base_url + '?sort=' + sort;

            // build url
            let build_url;

            /*
            if (/*search.length > 0 ||*/ kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) {
                build_url = base_url + '&sort=' + sort+ /*'?q=' + search +*/ '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun;
            }else{
                build_url = base_url + '?sort=' + sort;
            }*/

            // placeholder
            suratPlaceholder();
            
            $.ajax({
                url: build_url,
                type: 'POST',
                dataType: 'JSON',
                success: function(data) {

                    // change title
                document.title = data.title;

                    // change url history
                    history.pushState({}, data.title, build_url);
                    //history.pushState({}, build_url);

                    // refresh data
                    $('#main-surat').html(data.content);

                    // re-init because its refresh DOM 
                    sortSurat();
                    kat1Surat();
                    kat2Surat();
                    bulanSurat();
                    tahunSurat();
                    PaginationAjax();

                },error: function(xhr, statusText, errorThrown) {
                    alert(statusText);
                }
            });
        });        
        }

    // init kat1Surat
    kat1Surat();
    
    function kat2Surat(){
        $('#kat2-surat').on('change', function() {
            const kat2 = this.value;
            const sort  = $('#sort-surat').val();
            const kat1  = $('#kat1-surat').val(); 
            const bulan  = $('#sort-bulan').val();  
            const tahun  = $('#sort-tahun').val();
            const build_url = (kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) ? base_url + '&sort=' + sort + '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun : base_url + '?sort=' + sort;
            
            // build url
            let build_url;

            /*
            if (/*search.length > 0 ||*/ kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) {
                build_url = base_url + '&sort=' + sort+ /*'?q=' + search +*/ '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun;
            }else{
                build_url = base_url + '?sort=' + sort;
            }*/

            // placeholder
            suratPlaceholder();
            
            $.ajax({
                url: build_url,
                type: 'POST',
                dataType: 'JSON',
                success: function(data) {

                    // change title
                document.title = data.title;

                    // change url history
                    history.pushState({}, data.title, build_url);
                    //history.pushState({}, build_url);

                    // refresh data
                    $('#main-surat').html(data.content);

                    // re-init because its refresh DOM 
                    sortSurat();
                    kat1Surat();
                    kat2Surat();
                    bulanSurat();
                    tahunSurat();
                    PaginationAjax();

                },error: function(xhr, statusText, errorThrown) {
                    alert(statusText);
                }
            });
        });        
        }

    // init kat1Surat
    kat2Surat(); 

    function bulanSurat(){
        $('#sort-bulan').on('change', function() {
            const bulan = this.value;
            const sort  = $('#sort-surat').val();
            const kat1  = $('#kat1-surat').val(); 
            const kat2  = $('#kat2-surat').val();  
            const tahun  = $('#sort-tahun').val();
            const build_url = (kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) ? base_url + '&sort=' + sort + '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun : base_url + '?sort=' + sort;
            
            /*
            if (/*search.length > 0 ||*/ kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) {
                build_url = base_url + '&sort=' + sort+ /*'?q=' + search +*/ '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun;
            }else{
                build_url = base_url + '?sort=' + sort;
            }*/
            // placeholder
            suratPlaceholder();
            
            $.ajax({
                url: build_url,
                type: 'POST',
                dataType: 'JSON',
                success: function(data) {

                    // change title
                document.title = data.title;

                    // change url history
                    history.pushState({}, data.title, build_url);
                    //history.pushState({}, build_url);

                    // refresh data
                    $('#main-surat').html(data.content);

                    // re-init because its refresh DOM 
                    sortSurat();
                    kat1Surat();
                    kat2Surat();
                    bulanSurat();
                    tahunSurat();
                    PaginationAjax();

                },error: function(xhr, statusText, errorThrown) {
                    alert(statusText);
                }
            });
        });        
        }

    // init kat1Surat
    bulanSurat(); 

    function tahunSurat(){
        $('#sort-tahun').on('change', function() {
            const tahun = this.value;
            const sort  = $('#sort-surat').val();
            const kat1  = $('#kat1-surat').val(); 
            const kat2  = $('#kat2-surat').val();  
            const bulan  = $('#sort-bulan').val();
            const build_url = (kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) ? base_url + '&sort=' + sort + '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun : base_url + '?sort=' + sort;
            
            /*
            if (/*search.length > 0 ||*/ kat1.length > 0 || kat2.length > 0 || bulan.length > 0 || tahun.length > 0) {
                build_url = base_url + '&sort=' + sort+ /*'?q=' + search +*/ '?kat1=' + kat1 + '?kat2=' + kat2 + '?bulan=' + bulan + '?tahun=' + tahun;
            }else{
                build_url = base_url + '?sort=' + sort;
            }*/
            // placeholder
            suratPlaceholder();
            
            $.ajax({
                url: build_url,
                type: 'POST',
                dataType: 'JSON',
                success: function(data) {

                    // change title
                document.title = data.title;

                    // change url history
                    history.pushState({}, data.title, build_url);
                    //history.pushState({}, build_url);

                    // refresh data
                    $('#main-surat').html(data.content);

                    // re-init because its refresh DOM 
                    sortSurat();
                    kat1Surat();
                    kat2Surat();
                    bulanSurat();
                    tahunSurat();
                    PaginationAjax();

                },error: function(xhr, statusText, errorThrown) {
                    alert(statusText);
                }
            });
        });        
        }

    // init kat1Surat
    tahunSurat(); 