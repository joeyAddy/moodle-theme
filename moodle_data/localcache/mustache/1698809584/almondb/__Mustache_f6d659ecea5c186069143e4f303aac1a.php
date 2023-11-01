<?php

class __Mustache_f6d659ecea5c186069143e4f303aac1a extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $buffer .= $indent . '<div class="block09 block09desing1 blockbgwhite">
';
        $buffer .= $indent . '  <div class="container">
';
        $buffer .= $indent . '    <div class="row">
';
        $value = $context->find('block09');
        $buffer .= $this->section9c75c84f090a4c2edadc38cdd1edfc04($context, $indent, $value);
        $buffer .= $indent . '    </div>
';
        $buffer .= $indent . '  </div>
';
        $buffer .= $indent . '</div>
';

        return $buffer;
    }

    private function sectionB552774824862311ecb069f84a21c68d(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style= "background-image: url({{{imgurl}}}); background-size: cover;" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style= "background-image: url(';
                $value = $this->resolveValue($context->find('imgurl'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '); background-size: cover;" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section1ac565cc9928a32fd1a626553cd10d82(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'style="background-color: {{bgcolor}};" ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'style="background-color: ';
                $value = $this->resolveValue($context->find('bgcolor'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ';" ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section98356cba8263314c491fc915c0809a1e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' 37, {{catagoryname}} ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' 37, ';
                $value = $this->resolveValue($context->find('catagoryname'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionE55f19b269c26d8f1cd55f50de87fcee(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = ' over, theme_almondb ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= ' over, theme_almondb ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function sectionEc78209ae2cea999aab51ef125bebfac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = 'courses, moodle ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= 'courses, moodle ';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section9c75c84f090a4c2edadc38cdd1edfc04(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="col-12 col-md-6 m-auto col-lg-4 pb-4">
        <a class="text-decoration-none" href="{{catagoryURL}}">
          <div class="fdb-box fdb-touch " 
                    {{# imgurl }}style= "background-image: url({{{imgurl}}}); background-size: cover;" {{/ imgurl}}
                    {{# bgcolor }}style="background-color: {{bgcolor}};" {{/ bgcolor }}>
            <div class="block-text-box text-center">
              <h6>{{#shortentext}} 37, {{catagoryname}} {{/shortentext}}</h6>
              <h6>{{#str}} over, theme_almondb {{/str}} {{coursecount}} {{#str}}courses, moodle {{/str}}</h6>
            </div>
          </div>
        </a>
      </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <div class="col-12 col-md-6 m-auto col-lg-4 pb-4">
';
                $buffer .= $indent . '        <a class="text-decoration-none" href="';
                $value = $this->resolveValue($context->find('catagoryURL'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '">
';
                $buffer .= $indent . '          <div class="fdb-box fdb-touch " 
';
                $buffer .= $indent . '                    ';
                $value = $context->find('imgurl');
                $buffer .= $this->sectionB552774824862311ecb069f84a21c68d($context, $indent, $value);
                $buffer .= '
';
                $buffer .= $indent . '                    ';
                $value = $context->find('bgcolor');
                $buffer .= $this->section1ac565cc9928a32fd1a626553cd10d82($context, $indent, $value);
                $buffer .= '>
';
                $buffer .= $indent . '            <div class="block-text-box text-center">
';
                $buffer .= $indent . '              <h6>';
                $value = $context->find('shortentext');
                $buffer .= $this->section98356cba8263314c491fc915c0809a1e($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '              <h6>';
                $value = $context->find('str');
                $buffer .= $this->sectionE55f19b269c26d8f1cd55f50de87fcee($context, $indent, $value);
                $buffer .= ' ';
                $value = $this->resolveValue($context->find('coursecount'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= ' ';
                $value = $context->find('str');
                $buffer .= $this->sectionEc78209ae2cea999aab51ef125bebfac($context, $indent, $value);
                $buffer .= '</h6>
';
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '        </a>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}
