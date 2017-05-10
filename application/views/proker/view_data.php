<div class="row">
	<div class="ibox-content m-b-sm border-bottom">
		<div class="text-center p-lg">
		<h2>Program Kerja HIMATIF</h2>
		<span>Divisi  </span>
		</div>
	</div>
	 <div class="faq-item">
	    <div class="row">
	        <div class="col-md-7">
	            <a data-toggle="collapse" href="#faq1" class="faq-question">Kapan kegiatan program kerja akan dilaksanakan ?</a>
	            <small>Added by <strong>Alex Smith</strong> <i class="fa fa-clock-o"></i> </small>
	        </div>
	        <div class="col-md-3">
	        </div>   
	    </div>
	    <div class="row">
	        <div class="col-lg-12">
	            <div id="faq1" class="panel-collapse collapse ">
	                <div class="faq-answer">
	                    <p>
	                      kegiatan program kerja dilaksanakan pada :<strong><?php echo $prk->jadwal_mulai; ?></strong> <br/>
	         			   kegiatan program kerja berakhir pada :<strong> <?php echo $prk->jadwal_selesai; ?></strong> 
	                    </p> 
	                 </div>
	            </div>
	        </div>
	    </div>
	</div>

	 		 <div class="faq-item">
	            <div class="row">
	                <div class="col-md-7">
	                    <a data-toggle="collapse" href="#faq2" class="faq-question">Kegiatan apa yang akan dilakukan ?</a>
	                    <small>Added by <strong>Mark Nowak</strong> <i class="fa fa-clock-o"></i> Today 3:30 pm - 11.06.2014</small>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-12">
	                    <div id="faq2" class="panel-collapse collapse">
	                        <div class="faq-answer">
	                            <p>
	                                Kegiatan yang akan dilakukan adalah : <strong><?php echo $prk->kegiatan; ?></strong>
	                            </p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

	         <div class="faq-item">
	            <div class="row">
	                <div class="col-md-7">
	                    <a data-toggle="collapse" href="#faq3" class="faq-question">Bagaimana Persiapan dan Perkembangan Sejauh ini?</a>
	                    <small>Added by <strong>Mark Nowak</strong> <i class="fa fa-clock-o"></i> Today 3:30 pm - 11.06.2014</small>
	                </div>
	            </div>
	            <div class="row">
	                <div class="col-lg-12">
	                    <div id="faq3" class="panel-collapse collapse">
	                        <div class="faq-answer">
	                            <p>
	                                Sampai sejauh ini persiapan dan perkembangan yang telah dilakukan berdasarkan informasi divisi terkait adalah :<br> <strong><?php echo $prk->keterangan; ?></strong>
	                            </p>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

</div>

