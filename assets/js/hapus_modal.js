 $('#edo-prett').on('shown.bs.modal', function(e){
        var btn = $(e.relatedTarget);
        var nid = btn.data('nid');
        var nama = btn.data('nama');

        var modal = $(this);

        var edoLink = modal.find('.edo-link');
        var newLink = edoLink.attr('href') + nid;
        edoLink.attr('href', newLink);

        modal.find('.nid-dosen').text(nid);
        modal.find('.nama-dosen').text(nama);
    });
   
       
        //END SURAT

      $('#modal-struktur').on('shown.bs.modal', function(e){
        var btn = $(e.relatedTarget);
        var nid = btn.data('nid');
        var nama = btn.data('nama');

        var modal = $(this);

        var edoLink = modal.find('.edo-link');
        var newLink = edoLink.attr('href') + nid;
        edoLink.attr('href', newLink);

        modal.find('.nid-dosen').text(nid);
        modal.find('.nama-dosen').text(nama);
    });
      //STRUKTUR-HAPUS
       $('#hapus-struktur').on('shown.bs.modal', function(e){
        var btn = $(e.relatedTarget);
        var nid = btn.data('id');
        var nama = btn.data('nama');

        var modal = $(this);

        var edoLink = modal.find('.edo-link');
        var newLink = edoLink.attr('href') + nid;
        edoLink.attr('href', newLink);

        modal.find('.id-struktur').text(nid);
        modal.find('.nama-struktur').text(nama);
    });

     //SURAT UNDANGAN
     $('#edo-und').on('shown.bs.modal', function(e){
        var btn = $(e.relatedTarget);
        var no = btn.data('no');
        var nama = btn.data('lampiran');
        var nama = btn.data('perihal');
        var nama = btn.data('namaPlg');
        var nama = btn.data('tgl');
        var nama = btn.data('waktu_mulai');
        var nama = btn.data('waktu_selesai');
        var nama = btn.data('tempat');

        var modal = $(this);

        var myLink = modal.find('.my-link');
        var newLink = myLink.attr('href') + no;
        myLink.attr('href', newLink);
        
        modal.find('.data-no').text(no);
        modal.find('.nama-lampiran').text(lampiran);
        modal.find('.nama-perihal').text(perihal);
        modal.find('.nama-namaPlg').text(namaPlg);
        modal.find('.nama-tgl').text(tgl);
        modal.find('.nama-waktu_mulai').text(waktu_mulai);
        modal.find('.nama-waktu_selesai').text(waktu_selesai);
        modal.find('.nama-tempat').text(tempat);
    });

      //DIVISI
    $('#edo-dvs').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('nama');
        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-dvs').text(kode);
        modal.find('.nama-dvs').text(nama);
    });
     //DIVISI
    $('#deleteDataFile').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('nama');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-dok').text(kode);
        modal.find('.nama-dok').text(nama);
    });

      //PROKER
     $('#edo-proker').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('nama');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-proker').text(kode);
        modal.find('.nama-proker').text(nama);
    });
      //KAS
     $('#edo-kas').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('nama');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-kas').text(kode);
        modal.find('.nama-kas').text(nama);
    });

        //STRUKTUR
     $('#edo-struktur').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('nama');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-struktur').text(kode);
        modal.find('.nama-struktur').text(nama);
    });

       //DOKUMEN
     $('#edo-dokumen').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('nama');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-dokumen').text(kode);
        modal.find('.nama-dokumen').text(nama);
    });
     //PENGELUARAN
     $('#edo-keluar').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('nama');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-keluar').text(kode);
        modal.find('.nama-keluar').text(nama);
    });
       //SURAT PEMBERITAHUAN
     $('#edo-sPem').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var nomor    = btn.data('nomor');
        var perihal    = btn.data('perihal');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + nomor;
        myLink.attr('href', newLink);
        
        modal.find('.nomor-surat').text(nomor);
        modal.find('.perihal-surat').text(perihal);
    });
      //SURAT PEMBERITAHUAN 2
     $('#edo-sPem2').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var no    = btn.data('no');
        var perihal    = btn.data('perihal');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + no;
        myLink.attr('href', newLink);
        
        modal.find('.no-surat').text(no);
        modal.find('.perihal-surat').text(perihal);
    });

     $('#editModal').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var id_username     = btn.data('id_username');
        var username        = btn.data('username');
        var password        = btn.data('password');
        var status          = btn.data('status');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + id_username;
        myLink.attr('href', newLink);
        
        modal.find('#id_username').text(id_username);
        modal.find('#username').text(username);
        modal.find('#password').text(password);
        modal.find('#status').text(status);
    });

    $('#edo-hps').on('shown.bs.modal', function(e){
        var btn     = $(e.relatedTarget);
        var kode    = btn.data('kode');
        var nama    = btn.data('username');

        var modal   = $(this);

        var myLink  = modal.find('.my-link');
        var newLink = myLink.attr('href') + kode;
        myLink.attr('href', newLink);
        
        modal.find('.kode-dok').text(kode);
        modal.find('.nama-dok').text(nama);
    });