<?php

class __Mustache_1674a34db46c59b36a5d11834020f6a2 extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('sliderenabled');
        $buffer .= $this->section40326e31de2b3f5f4ce53aa41004fb7b($context, $indent, $value);

        return $buffer;
    }

    private function section39fafbade5b4daabdb3367e1272d1046(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="active"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="active"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE13cdcbe82c09a5257beaddfa07842b2(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li data-target="#carouselExampleCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li data-target="#carouselExampleCaptions" data-slide-to="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('active');
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $value);
                $buffer .= '></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5749c750acb0d7477dd5257d00cc6d53(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'active';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'active';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB09e4b0a2e81cdab990895ee67b84cce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h1 class="text-light">{{{ title }}}{{{ sliderdesing }}}</h1>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h1 class="text-light">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $value = $this->resolveValue($context->find('sliderdesing'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h1>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionAaf261c7f4f880b03b675605ebdd278a(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p>{{{ caption }}}</p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p>';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a972768511b25810ffd6f2f5622e411(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<p><a class="hybtn get-started-btn p-8" href="{{{buttonurl}}}">{{{ button }}}</a></p>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<p><a class="hybtn get-started-btn p-8" href="';
                $value = $this->resolveValue($context->find('buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '">';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a></p>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF78ae5f51bab880fe15213078f03d6d1(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="carousel-item sldcontainer {{#active}}active{{/active}}">
                    <img src="{{{image}}}" class="d-block w-100"  height="{{{slidershowheight}}}" alt="sld" >
                    <div class="carousel-caption sldcontent">
                        {{#title}}<h1 class="text-light">{{{ title }}}{{{ sliderdesing }}}</h1>{{/title}}
                        {{#caption}}<p>{{{ caption }}}</p>{{/caption}}
                        {{#button}}<p><a class="hybtn get-started-btn p-8" href="{{{buttonurl}}}">{{{ button }}}</a></p>{{/button}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="carousel-item sldcontainer ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="d-block w-100"  height="';
                $value = $this->resolveValue($context->find('slidershowheight'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="sld" >
';
                $buffer .= $indent . '                    <div class="carousel-caption sldcontent">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('title');
                $buffer .= $this->sectionB09e4b0a2e81cdab990895ee67b84cce($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $context->find('caption');
                $buffer .= $this->sectionAaf261c7f4f880b03b675605ebdd278a($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        ';
                $value = $context->find('button');
                $buffer .= $this->section5a972768511b25810ffd6f2f5622e411($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE7ecb6f95fa4432cb8dd75ff4d2e1f13(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            {{#slides}}
                <li data-target="#carouselExampleCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            {{/slides}}
        </ol>
        <div class="carousel-inner">
            {{#slides}}
                <div class="carousel-item sldcontainer {{#active}}active{{/active}}">
                    <img src="{{{image}}}" class="d-block w-100"  height="{{{slidershowheight}}}" alt="sld" >
                    <div class="carousel-caption sldcontent">
                        {{#title}}<h1 class="text-light">{{{ title }}}{{{ sliderdesing }}}</h1>{{/title}}
                        {{#caption}}<p>{{{ caption }}}</p>{{/caption}}
                        {{#button}}<p><a class="hybtn get-started-btn p-8" href="{{{buttonurl}}}">{{{ button }}}</a></p>{{/button}}
                    </div>
                </div>
            {{/slides}}
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions"  data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
';
                $buffer .= $indent . '        <ol class="carousel-indicators">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionE13cdcbe82c09a5257beaddfa07842b2($context, $indent, $value);
                $buffer .= $indent . '        </ol>
';
                $buffer .= $indent . '        <div class="carousel-inner">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionF78ae5f51bab880fe15213078f03d6d1($context, $indent, $value);
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
';
                $buffer .= $indent . '            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
                $buffer .= $indent . '            <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <a class="carousel-control-next" href="#carouselExampleCaptions"  data-slide="next">
';
                $buffer .= $indent . '            <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
                $buffer .= $indent . '            <span class="sr-only">Next</span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionA3d5408a259ee30d3d4c670aa79f5463(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'class="carousel-content-image"';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'class="carousel-content-image"';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section19dc0a445242fc4d61a6162fa067a4cc(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h1 class="text-light">{{{ title }}}</h1>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h1 class="text-light">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h1>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8667e61d5521114eedd63425f92a6801(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h5>{{{ caption }}}</h5>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h5>';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionF641406b688d4c72c1d4599a3c25b385(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img src="{{{image}}}" class="d-block w-100" height="{{{slidershowheight}}}" alt="sld" style="filter: brightness(60%);" >
                    <div {{#slideropacity}}class="carousel-content-image"{{/slideropacity}}>
                        <div class="slider-inner carousel-caption">
                            {{#title}}<h1 class="text-light">{{{ title }}}</h1>{{/title}}
                            {{#caption}}<h5>{{{ caption }}}</h5>{{/caption}}
                            {{#button}}<p><a class="hybtn get-started-btn p-8" href="{{{buttonurl}}}">{{{ button }}}</a></p>{{/button}}
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
                
                $buffer .= $indent . '                <div class="carousel-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <img src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="d-block w-100" height="';
                $value = $this->resolveValue($context->find('slidershowheight'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="sld" style="filter: brightness(60%);" >
';
                $buffer .= $indent . '                    <div ';
                $value = $context->find('slideropacity');
                $buffer .= $this->sectionA3d5408a259ee30d3d4c670aa79f5463($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '                        <div class="slider-inner carousel-caption">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('title');
                $buffer .= $this->section19dc0a445242fc4d61a6162fa067a4cc($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('caption');
                $buffer .= $this->section8667e61d5521114eedd63425f92a6801($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('button');
                $buffer .= $this->section5a972768511b25810ffd6f2f5622e411($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7c62195fa63fe3c77e47e0a15a7906ec(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            {{#slides}}
                <li data-target="#carouselExampleCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            {{/slides}}
        </ol>
        <div class="carousel-inner">
            {{#slides}}
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img src="{{{image}}}" class="d-block w-100" height="{{{slidershowheight}}}" alt="sld" style="filter: brightness(60%);" >
                    <div {{#slideropacity}}class="carousel-content-image"{{/slideropacity}}>
                        <div class="slider-inner carousel-caption">
                            {{#title}}<h1 class="text-light">{{{ title }}}</h1>{{/title}}
                            {{#caption}}<h5>{{{ caption }}}</h5>{{/caption}}
                            {{#button}}<p><a class="hybtn get-started-btn p-8" href="{{{buttonurl}}}">{{{ button }}}</a></p>{{/button}}
                        </div>
                    </div>
                </div>
            {{/slides}}
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions"  data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
';
                $buffer .= $indent . '        <ol class="carousel-indicators">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionE13cdcbe82c09a5257beaddfa07842b2($context, $indent, $value);
                $buffer .= $indent . '        </ol>
';
                $buffer .= $indent . '        <div class="carousel-inner">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionF641406b688d4c72c1d4599a3c25b385($context, $indent, $value);
                $buffer .= $indent . '        
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '        <a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
';
                $buffer .= $indent . '            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
';
                $buffer .= $indent . '            <span class="sr-only">Previous</span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '        <a class="carousel-control-next" href="#carouselExampleCaptions"  data-slide="next">
';
                $buffer .= $indent . '            <span class="carousel-control-next-icon" aria-hidden="true"></span>
';
                $buffer .= $indent . '            <span class="sr-only">Next</span>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionC884e3b4c8aff3e34a1eceeedd3407fb(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <li data-target="#carouselSlideCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <li data-target="#carouselSlideCaptions" data-slide-to="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('active');
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $value);
                $buffer .= '></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionB776e185f39831c09db4c21d623851c6(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h2 class="title">{{{ title }}}</h2>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h2 class="title">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section32815430606f0c4d6328720ea77f5488(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="caption">{{{ caption }}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="caption">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD76561907b853bf5ab6fc97eb2f92b9f(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img class="d-block w-100 animated fadeIn" src="{{{ image }}}" alt="sld">

                    <div class="carousel-caption animated fadeInRightBig">
                        {{#title}}<h2 class="title">{{{ title }}}</h2>{{/title}}

                        {{#caption}}<div class="caption">{{{ caption }}}</div>{{/caption}}
                    </div>
                </div>
            ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="carousel-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '">
';
                $buffer .= $indent . '                    <img class="d-block w-100 animated fadeIn" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" alt="sld">
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                    <div class="carousel-caption animated fadeInRightBig">
';
                $buffer .= $indent . '                        ';
                $value = $context->find('title');
                $buffer .= $this->sectionB776e185f39831c09db4c21d623851c6($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '                        ';
                $value = $context->find('caption');
                $buffer .= $this->section32815430606f0c4d6328720ea77f5488($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionD937fba04bf0d6ef85a91e6368892496(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        require([\'jquery\', \'theme_almondb/bootstrap/carousel\'], function($, carousel) {
            $(\'#carouselSlideCaptions\').carousel({
                interval: 2500,
                pause: \'hover\'
            });
        })
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        require([\'jquery\', \'theme_almondb/bootstrap/carousel\'], function($, carousel) {
';
                $buffer .= $indent . '            $(\'#carouselSlideCaptions\').carousel({
';
                $buffer .= $indent . '                interval: 2500,
';
                $buffer .= $indent . '                pause: \'hover\'
';
                $buffer .= $indent . '            });
';
                $buffer .= $indent . '        })
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section7913d9d6a0965e3b9a226f1313e24fab(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="carouselSlideCaptions" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            {{#slides}}
                <li data-target="#carouselSlideCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            {{/slides}}
        </ol>
        <div class="carousel-inner">
            {{#slides}}
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img class="d-block w-100 animated fadeIn" src="{{{ image }}}" alt="sld">

                    <div class="carousel-caption animated fadeInRightBig">
                        {{#title}}<h2 class="title">{{{ title }}}</h2>{{/title}}

                        {{#caption}}<div class="caption">{{{ caption }}}</div>{{/caption}}
                    </div>
                </div>
            {{/slides}}
        </div>
    </div>
    {{#js}}
        require([\'jquery\', \'theme_almondb/bootstrap/carousel\'], function($, carousel) {
            $(\'#carouselSlideCaptions\').carousel({
                interval: 2500,
                pause: \'hover\'
            });
        })
    {{/js}}
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div id="carouselSlideCaptions" class="carousel slide" data-ride="carousel" data-interval="5000">
';
                $buffer .= $indent . '        <ol class="carousel-indicators">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionC884e3b4c8aff3e34a1eceeedd3407fb($context, $indent, $value);
                $buffer .= $indent . '        </ol>
';
                $buffer .= $indent . '        <div class="carousel-inner">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionD76561907b853bf5ab6fc97eb2f92b9f($context, $indent, $value);
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $value = $context->find('js');
                $buffer .= $this->sectionD937fba04bf0d6ef85a91e6368892496($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE47de430560e1adf6d24fe97a4a7ec8b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                    <li data-target="#header-carousel" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                    <li data-target="#header-carousel" data-slide-to="';
                $value = $this->resolveValue($context->find('key'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" ';
                $value = $context->find('active');
                $buffer .= $this->section39fafbade5b4daabdb3367e1272d1046($context, $indent, $value);
                $buffer .= '></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE8cd03bf7cf6d1c0de66f7fba5a6abe9(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<h5 class="text-uppercase mb-md-3">{{{ title }}}</h5>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<h5 class="text-uppercase mb-md-3">';
                $value = $this->resolveValue($context->find('title'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h5>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section5a6223d7b2c7736517e747b1cfc06f50(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<div class="h1 font-weight-bold display-3 mb-md-4">{{{ caption }}}</div>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<div class="h1 font-weight-bold display-3 mb-md-4">';
                $value = $this->resolveValue($context->find('caption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</div>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section63eb5361476ddd68e4a6ea090daf7955(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '<a href="{{{buttonurl}}}" class="hybtn py-md-2 px-md-4 font-weight-semi-bold mt-2">{{{ button }}}</a>';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= '<a href="';
                $value = $this->resolveValue($context->find('buttonurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" class="hybtn py-md-2 px-md-4 font-weight-semi-bold mt-2">';
                $value = $this->resolveValue($context->find('button'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</a>';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section92519efffc643d9fa6ab1f41d7d31f36(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="carousel-item {{#active}}active{{/active}}" style="min-height: 300px;">
                    <img class="position-relative w-100" src="{{{ image }}}" style="min-height: 300px; object-fit: cover; height:{{{slidershowheight}}}px;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-6" style="width: 100%; max-width: 900px;">
                            {{#title}}<h5 class="text-uppercase mb-md-3">{{{ title }}}</h5>{{/title}}
                            {{#caption}}<div class="h1 font-weight-bold display-3 mb-md-4">{{{ caption }}}</div>{{/caption}}
                            {{#button}}<a href="{{{buttonurl}}}" class="hybtn py-md-2 px-md-4 font-weight-semi-bold mt-2">{{{ button }}}</a>{{/button}}
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
                
                $buffer .= $indent . '                <div class="carousel-item ';
                $value = $context->find('active');
                $buffer .= $this->section5749c750acb0d7477dd5257d00cc6d53($context, $indent, $value);
                $buffer .= '" style="min-height: 300px;">
';
                $buffer .= $indent . '                    <img class="position-relative w-100" src="';
                $value = $this->resolveValue($context->find('image'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '" style="min-height: 300px; object-fit: cover; height:';
                $value = $this->resolveValue($context->find('slidershowheight'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= 'px;">
';
                $buffer .= $indent . '                    <div class="carousel-caption d-flex align-items-center justify-content-center">
';
                $buffer .= $indent . '                        <div class="p-6" style="width: 100%; max-width: 900px;">
';
                $buffer .= $indent . '                            ';
                $value = $context->find('title');
                $buffer .= $this->sectionE8cd03bf7cf6d1c0de66f7fba5a6abe9($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('caption');
                $buffer .= $this->section5a6223d7b2c7736517e747b1cfc06f50($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                            ';
                $value = $context->find('button');
                $buffer .= $this->section63eb5361476ddd68e4a6ea090daf7955($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                        </div>
';
                $buffer .= $indent . '                    </div>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section585383638f8754376544159a654ddf41(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div id="slider4" class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
             <ol class="carousel-indicators">
                {{#slides}}
                    <li data-target="#header-carousel" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
                {{/slides}}
            </ol>
            <div class="carousel-inner">
                {{#slides}}
                <div class="carousel-item {{#active}}active{{/active}}" style="min-height: 300px;">
                    <img class="position-relative w-100" src="{{{ image }}}" style="min-height: 300px; object-fit: cover; height:{{{slidershowheight}}}px;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-6" style="width: 100%; max-width: 900px;">
                            {{#title}}<h5 class="text-uppercase mb-md-3">{{{ title }}}</h5>{{/title}}
                            {{#caption}}<div class="h1 font-weight-bold display-3 mb-md-4">{{{ caption }}}</div>{{/caption}}
                            {{#button}}<a href="{{{buttonurl}}}" class="hybtn py-md-2 px-md-4 font-weight-semi-bold mt-2">{{{ button }}}</a>{{/button}}
                        </div>
                    </div>
                </div>
                {{/slides}}
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
                
                $buffer .= $indent . '    <div id="slider4" class="container-fluid p-0">
';
                $buffer .= $indent . '        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
';
                $buffer .= $indent . '             <ol class="carousel-indicators">
';
                $value = $context->find('slides');
                $buffer .= $this->sectionE47de430560e1adf6d24fe97a4a7ec8b($context, $indent, $value);
                $buffer .= $indent . '            </ol>
';
                $buffer .= $indent . '            <div class="carousel-inner">
';
                $value = $context->find('slides');
                $buffer .= $this->section92519efffc643d9fa6ab1f41d7d31f36($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '        </div>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section40326e31de2b3f5f4ce53aa41004fb7b(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div style="margin-top:0px;"></div>
    {{! slider 1}}
    {{#slider1}}
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            {{#slides}}
                <li data-target="#carouselExampleCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            {{/slides}}
        </ol>
        <div class="carousel-inner">
            {{#slides}}
                <div class="carousel-item sldcontainer {{#active}}active{{/active}}">
                    <img src="{{{image}}}" class="d-block w-100"  height="{{{slidershowheight}}}" alt="sld" >
                    <div class="carousel-caption sldcontent">
                        {{#title}}<h1 class="text-light">{{{ title }}}{{{ sliderdesing }}}</h1>{{/title}}
                        {{#caption}}<p>{{{ caption }}}</p>{{/caption}}
                        {{#button}}<p><a class="hybtn get-started-btn p-8" href="{{{buttonurl}}}">{{{ button }}}</a></p>{{/button}}
                    </div>
                </div>
            {{/slides}}
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions"  data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{/slider1}}
    {{! slider 2}}
    {{#slider2}}
    <div id="carouselExampleCaptions" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            {{#slides}}
                <li data-target="#carouselExampleCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            {{/slides}}
        </ol>
        <div class="carousel-inner">
            {{#slides}}
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img src="{{{image}}}" class="d-block w-100" height="{{{slidershowheight}}}" alt="sld" style="filter: brightness(60%);" >
                    <div {{#slideropacity}}class="carousel-content-image"{{/slideropacity}}>
                        <div class="slider-inner carousel-caption">
                            {{#title}}<h1 class="text-light">{{{ title }}}</h1>{{/title}}
                            {{#caption}}<h5>{{{ caption }}}</h5>{{/caption}}
                            {{#button}}<p><a class="hybtn get-started-btn p-8" href="{{{buttonurl}}}">{{{ button }}}</a></p>{{/button}}
                        </div>
                    </div>
                </div>
            {{/slides}}
        
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions"  data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    {{/slider2}}    
    {{! slider 3}}
    {{#slider3}}
    <div id="carouselSlideCaptions" class="carousel slide" data-ride="carousel" data-interval="5000">
        <ol class="carousel-indicators">
            {{#slides}}
                <li data-target="#carouselSlideCaptions" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
            {{/slides}}
        </ol>
        <div class="carousel-inner">
            {{#slides}}
                <div class="carousel-item {{#active}}active{{/active}}">
                    <img class="d-block w-100 animated fadeIn" src="{{{ image }}}" alt="sld">

                    <div class="carousel-caption animated fadeInRightBig">
                        {{#title}}<h2 class="title">{{{ title }}}</h2>{{/title}}

                        {{#caption}}<div class="caption">{{{ caption }}}</div>{{/caption}}
                    </div>
                </div>
            {{/slides}}
        </div>
    </div>
    {{#js}}
        require([\'jquery\', \'theme_almondb/bootstrap/carousel\'], function($, carousel) {
            $(\'#carouselSlideCaptions\').carousel({
                interval: 2500,
                pause: \'hover\'
            });
        })
    {{/js}}
    {{/slider3}}
    {{#slider4}}
    <div id="slider4" class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide carousel-fade" data-ride="carousel">
             <ol class="carousel-indicators">
                {{#slides}}
                    <li data-target="#header-carousel" data-slide-to="{{{ key }}}" {{#active}}class="active"{{/active}}></li>
                {{/slides}}
            </ol>
            <div class="carousel-inner">
                {{#slides}}
                <div class="carousel-item {{#active}}active{{/active}}" style="min-height: 300px;">
                    <img class="position-relative w-100" src="{{{ image }}}" style="min-height: 300px; object-fit: cover; height:{{{slidershowheight}}}px;">
                    <div class="carousel-caption d-flex align-items-center justify-content-center">
                        <div class="p-6" style="width: 100%; max-width: 900px;">
                            {{#title}}<h5 class="text-uppercase mb-md-3">{{{ title }}}</h5>{{/title}}
                            {{#caption}}<div class="h1 font-weight-bold display-3 mb-md-4">{{{ caption }}}</div>{{/caption}}
                            {{#button}}<a href="{{{buttonurl}}}" class="hybtn py-md-2 px-md-4 font-weight-semi-bold mt-2">{{{ button }}}</a>{{/button}}
                        </div>
                    </div>
                </div>
                {{/slides}}
            </div>
        </div>
    </div>
    {{/slider4}}
';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div style="margin-top:0px;"></div>
';
                $value = $context->find('slider1');
                $buffer .= $this->sectionE7ecb6f95fa4432cb8dd75ff4d2e1f13($context, $indent, $value);
                $value = $context->find('slider2');
                $buffer .= $this->section7c62195fa63fe3c77e47e0a15a7906ec($context, $indent, $value);
                $value = $context->find('slider3');
                $buffer .= $this->section7913d9d6a0965e3b9a226f1313e24fab($context, $indent, $value);
                $value = $context->find('slider4');
                $buffer .= $this->section585383638f8754376544159a654ddf41($context, $indent, $value);
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
