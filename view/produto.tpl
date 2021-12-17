<h2> Pagina de Produtos </h2>

			<ul style="list-style:none">
				{foreach from=$PRO item=P}
		<div style="position: relative; display: flex; padding: 0 2em; justify-content: space-between;">
			<li>	
					<a href="{$PRO_INFO}/{$P.pro_id}/{$P.pro_slug}">
						<img src="view/img/{$P.pro_img}" alt="" width="200" height="200">
							<h4 class="text-center"> {$P.pro_nome} </h4>
							<h3 class="text-center text-danger">Valor ${$P.pro_valor}</h3>
					</a>
				{/foreach}
			</li>
			</ul>
		</div>
	</section>


