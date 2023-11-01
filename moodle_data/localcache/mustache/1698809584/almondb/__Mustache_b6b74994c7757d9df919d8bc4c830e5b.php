<?php

class __Mustache_b6b74994c7757d9df919d8bc4c830e5b extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block08desing1 blockbgcolor gray-bg">
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '      <div class="row">
';
        $buffer .= $indent . '          <div class="col-md-12" >
';
        $buffer .= $indent . '              <div class="section-title-fp hytext text-center blockbgwhite-b">
';
        $buffer .= $indent . '                  <h4>';
        $value = $this->resolveValue($context->find('block08header'), $context);
        $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
        $buffer .= '</h4>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '              <div class="item-content text-center hy-pt-5">    
';
        $buffer .= $indent . '                    <p>';
        $value = $this->resolveValue($context->find('block08caption'), $context);
        $buffer .= ($value === null ? '' : $value);
        $buffer .= '</p>
';
        $buffer .= $indent . '              </div>
';
        $buffer .= $indent . '          </div>
';
        $buffer .= $indent . '      </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '    <div id="block08desing1-slider" class="splide" >
';
        $buffer .= $indent . '        <div class="splide__track" >
';
        $buffer .= $indent . '            <ul class="splide__list " >
';
        $value = $context->find('block08');
        $buffer .= $this->sectionB482c2ad2d6f9979ef64c27e19509837($context, $indent, $value);
        $buffer .= $indent . '            </ul>
';
        $buffer .= $indent . '        </div>
';
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div> 
';
        $buffer .= $indent . '<script>
';
        $buffer .= $indent . 'document.addEventListener( \'DOMContentLoaded\', function () {
';
        $buffer .= $indent . '	new Splide( \'#block08desing1-slider\', {
';
        $buffer .= $indent . '        type    : \'loop\',
';
        $buffer .= $indent . '        autoplay: true,
';
        $buffer .= $indent . '        gap: \'1rem\',
';
        $buffer .= $indent . '        perPage: 4,
';
        $buffer .= $indent . '	    	perMove: 1,
';
        $buffer .= $indent . '        pagination: false,
';
        $buffer .= $indent . '        direction: document.dir,
';
        $buffer .= $indent . '        breakpoints: {
';
        $buffer .= $indent . '            1200:{ 
';
        $buffer .= $indent . '              perPage: 3,
';
        $buffer .= $indent . '            },
';
        $buffer .= $indent . '            980:{
';
        $buffer .= $indent . '                perPage: 2,
';
        $buffer .= $indent . '            },
';
        $buffer .= $indent . '            700: {
';
        $buffer .= $indent . '                perPage: 1,
';
        $buffer .= $indent . '                pagination: false,
';
        $buffer .= $indent . ' 		    },
';
        $buffer .= $indent . '	    }
';
        $buffer .= $indent . '	} ).mount();
';
        $buffer .= $indent . '} );
';
        $buffer .= $indent . '</script>
';

        return $buffer;
    }

    private function sectionA2a53515c09c9e8a67855b1a2f22d10f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block08tooltipstudents, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block08tooltipstudents, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9209b0f4c46b84880eeb41725b4fc0c0(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'block08tooltipcourse, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'block08tooltipcourse, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD1fe7f07a0da5286ddc3d71afa3731c1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                            <span class="float-right pl-2 pr-2">
                                {{coursecount}}+Courses
                            </span>
                          ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                            <span class="float-right pl-2 pr-2">
';
                $buffer .= $indent . '                                ';
                $value = $this->resolveValue($context->find('coursecount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '+Courses
';
                $buffer .= $indent . '                            </span>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionBd156cd63446bcba8ba82d133f6cece2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="hy__info hy-pt-15">
                      <h6 class="text-center hytext">{{teachername}}</h6>
                      <div class ="row hytext hy__total">
                        <div class="col-6">
                          {{^showdescription}}
                          <span class="pl-2 pr-2" data-toggle="tooltip" data-placement="top" 
                            title="{{#str}}block08tooltipstudents, theme_almondb {{/str}}">
                          {{/showdescription}}  
                            {{studentscount}}+Students 
                          {{^showdescription}}  
                          </span>
                          {{/showdescription}}
                        </div>
                        <div class="col-6">
                          {{^showdescription}}
                            <span class="float-right pl-2 pr-2" data-toggle="tooltip" data-placement="top" 
                              title="{{#str}}block08tooltipcourse, theme_almondb {{/str}}">
                                {{coursecount}}+Courses
                            </span>
                          {{/showdescription}}
                          {{#showdescription}}
                            <span class="float-right pl-2 pr-2">
                                {{coursecount}}+Courses
                            </span>
                          {{/showdescription}}
                        </div>
                      </div>
                    </div>
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="hy__info hy-pt-15">
';
                $buffer .= $indent . '                      <h6 class="text-center hytext">';
                $value = $this->resolveValue($context->find('teachername'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h6>
';
                $buffer .= $indent . '                      <div class ="row hytext hy__total">
';
                $buffer .= $indent . '                        <div class="col-6">
';
                $value = $context->find('showdescription');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                          <span class="pl-2 pr-2" data-toggle="tooltip" data-placement="top" 
';
                    $buffer .= $indent . '                            title="';
                    $value = $context->find('str');
                    $buffer .= $this->sectionA2a53515c09c9e8a67855b1a2f22d10f($context, $indent, $value);
                    $buffer .= '">
';
                }
                $buffer .= $indent . '                            ';
                $value = $this->resolveValue($context->find('studentscount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '+Students 
';
                $value = $context->find('showdescription');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                          </span>
';
                }
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                        <div class="col-6">
';
                $value = $context->find('showdescription');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                            <span class="float-right pl-2 pr-2" data-toggle="tooltip" data-placement="top" 
';
                    $buffer .= $indent . '                              title="';
                    $value = $context->find('str');
                    $buffer .= $this->section9209b0f4c46b84880eeb41725b4fc0c0($context, $indent, $value);
                    $buffer .= '">
';
                    $buffer .= $indent . '                                ';
                    $value = $this->resolveValue($context->find('coursecount'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '+Courses
';
                    $buffer .= $indent . '                            </span>
';
                }
                $value = $context->find('showdescription');
                $buffer .= $this->sectionD1fe7f07a0da5286ddc3d71afa3731c1($context, $indent, $value);
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                      </div>
';
                $buffer .= $indent . '                    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section88a19df69b701f25be66d894126ebf53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <div class="hy__overlay scroller">
                        <div class="hy__text">
                          <h6 class="text-center">{{teachername}}</h6>
                          {{{description}}} 
						 </div>
                    </div> 
                    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <div class="hy__overlay scroller">
';
                $buffer .= $indent . '                        <div class="hy__text">
';
                $buffer .= $indent . '                          <h6 class="text-center">';
                $value = $this->resolveValue($context->find('teachername'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</h6>
';
                $buffer .= $indent . '                          ';
                $value = $this->resolveValue($context->find('description'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ' 
';
                $buffer .= $indent . '						 </div>
';
                $buffer .= $indent . '                    </div> 
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB482c2ad2d6f9979ef64c27e19509837(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li class="splide__slide  hy__container ">
                    <a href="{{userURL}}">
                      <div class="hy__image">
                        <img src="{{userpictureURL}}" alt="user">
                      </div>
                    </a>
                    {{#block08total}}
                    <div class="hy__info hy-pt-15">
                      <h6 class="text-center hytext">{{teachername}}</h6>
                      <div class ="row hytext hy__total">
                        <div class="col-6">
                          {{^showdescription}}
                          <span class="pl-2 pr-2" data-toggle="tooltip" data-placement="top" 
                            title="{{#str}}block08tooltipstudents, theme_almondb {{/str}}">
                          {{/showdescription}}  
                            {{studentscount}}+Students 
                          {{^showdescription}}  
                          </span>
                          {{/showdescription}}
                        </div>
                        <div class="col-6">
                          {{^showdescription}}
                            <span class="float-right pl-2 pr-2" data-toggle="tooltip" data-placement="top" 
                              title="{{#str}}block08tooltipcourse, theme_almondb {{/str}}">
                                {{coursecount}}+Courses
                            </span>
                          {{/showdescription}}
                          {{#showdescription}}
                            <span class="float-right pl-2 pr-2">
                                {{coursecount}}+Courses
                            </span>
                          {{/showdescription}}
                        </div>
                      </div>
                    </div>
                    {{/block08total}}
                    {{^block08total}}
                    <div class="hy__info hy-pt-15">
                        <h6 class="text-center hytext">{{teachername}}</h6>
                    </div>
                    {{/block08total}}
                    {{#showdescription}}
                    <div class="hy__overlay scroller">
                        <div class="hy__text">
                          <h6 class="text-center">{{teachername}}</h6>
                          {{{description}}} 
						 </div>
                    </div> 
                    {{/showdescription}}   
                </li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li class="splide__slide  hy__container ">
';
                $buffer .= $indent . '                    <a href="';
                $value = $this->resolveValue($context->find('userURL'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '                      <div class="hy__image">
';
                $buffer .= $indent . '                        <img src="';
                $value = $this->resolveValue($context->find('userpictureURL'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" alt="user">
';
                $buffer .= $indent . '                      </div>
';
                $buffer .= $indent . '                    </a>
';
                $value = $context->find('block08total');
                $buffer .= $this->sectionBd156cd63446bcba8ba82d133f6cece2($context, $indent, $value);
                $value = $context->find('block08total');
                if (empty($value)) {
                    
                    $buffer .= $indent . '                    <div class="hy__info hy-pt-15">
';
                    $buffer .= $indent . '                        <h6 class="text-center hytext">';
                    $value = $this->resolveValue($context->find('teachername'), $context);
                    $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                    $buffer .= '</h6>
';
                    $buffer .= $indent . '                    </div>
';
                }
                $value = $context->find('showdescription');
                $buffer .= $this->section88a19df69b701f25be66d894126ebf53($context, $indent, $value);
                $buffer .= $indent . '                </li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
