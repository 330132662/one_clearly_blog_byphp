<?php include('post-safe.php');?>{* Template Name:网址提交 * Template Type: page *}
{template:header}
<main class="wrapper">
	{if $boke8->siteTop}
	<div class="sitetop gg">
	{$boke8->siteTop}
	</div>
	{/if}
    <div class="mainbox">
        {template:post-breadcrumb}
        <article class="post">
            <div class="recommend">
                <h1 class="title">{$article.Title}</h1>          
                <div class="entry">
                {$article.Content}
                </div>
                <div class="siteForm">
                    <form name="gbookFrm" id="gbookFrm" action="{$article.Url}" method="post">
                        <div class="item">
                            <label>站点名称：<i>*</i></label>
                            <div class="sitename input">
                                <input type="text" class="text" id="website" name="website" value="" tabindex="1" placeholder="输入提交的网站名称"/>
                            </div>
							<div class="nulltip"></div>
                        </div>
						<div class="item">
							<label>logo图片：</label>
							<div class="input">
								<input type="text" class="text" id="logo" name="logo" value="" tabindex="2" placeholder="输入LOGO图片绝对URL，没有LOGO请留空"/>
							</div>							
						</div>
                        <div class="item">
                            <label>站点网址：<i>*</i></label>
                            <div class="siteurl input">
                                <input type="text" class="text" id="url" name="url" value="" tabindex="3" placeholder="网站地址以http://或https://开头"/>
                            </div>
							<div class="nulltip"></div>
                        </div>
                        <div class="item">
                            <label>选择目录：<i>*</i></label>
                            <div class="input">
                                <select name="category">
									{foreach zbnavigation_categories() as $cate}
									<option value="{$cate.ID}">{$cate.Name}</option>
									{/foreach}
								</select>
                            </div>
                        </div>
                      
                        <div class="item">
                            <label>推荐理由：<i>*</i></label>
                            <div class="sitereson input">
                                <textarea class="text" id="reson" name="reason" placeholder="为什么提交这个网站？不少于20字"></textarea>
                            </div>
							<div class="nulltip"></div>
                        </div>
                        <div class="item">
                            <input type="hidden" name="join" value="10000000"/>
							<input type="hidden" value="submitsite" name="src" />
							<input type="submit" class="submit" value="立即提交"/>
                        </div>
                    </form>
                </div>
            </div>        
        </article>
    </div>
</main>
{template:footer}