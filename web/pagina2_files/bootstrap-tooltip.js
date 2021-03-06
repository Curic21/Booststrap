/* ===========================================================
 * bootstrap-tooltip.js v2.3.1
 * http://twitter.github.com/bootstrap/javascript.html#tooltips
 * Inspired by the original jQuery.tipsy by Jason Frame
 * ===========================================================
 * Copyright 2012 Twitter, Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * ========================================================== */


!function ($) {

  "use strict"; // jshint ;_;


 /* TOOLTIP PUBLIC CLASS DEFINITION
  * =============================== */

  var Tooltip = function (element, options) {
    this.init('tooltip', element, options)
  }

  Tooltip.prototype = {

    constructor: Tooltip

  , init: function (type, element, options) {
      var eventIn
        , eventOut
        , triggers
        , trigger
        , i

      this.type = type
      this.$element = $(element)
      this.options = this.getOptions(options)
      this.enabled = true

      triggers = this.options.trigger.split(' ')

      for (i = triggers.length; i--;) {
        trigger = triggers[i]
        if (trigger == 'click') {
          this.$element.on('click.' + this.type, this.options.selector, $.proxy(this.toggle, this))
        } else if (trigger != 'manual') {
          eventIn = trigger == 'hover' ? 'mouseenter' : 'focus'
          eventOut = trigger == 'hover' ? 'mouseleave' : 'blur'
          this.$element.on(eventIn + '.' + this.type, this.options.selector, $.proxy(this.enter, this))
          this.$element.on(eventOut + '.' + this.type, this.options.selector, $.proxy(this.leave, this))
        }
      }

      this.options.selector ?
        (this._options = $.extend({}, this.options, { trigger: 'manual', selector: '' })) :
        this.fixTitle()
    }

  , getOptions: function (options) {
      options = $.extend({}, $.fn[this.type].defaults, this.$element.data(), options)

      if (options.delay && typeof options.delay == 'number') {
        options.delay = {
          show: options.delay
        , hide: options.delay
        }
      }

      return options
    }

  , enter: function (e) {
      var defaults = $.fn[this.type].defaults
        , options = {}
        , self

      this._options && $.each(this._options, function (key, value) {
        if (defaults[key] != value) options[key] = value
      }, this)

      self = $(e.currentTarget)[this.type](options).data(this.type)

      if (!self.options.delay || !self.options.delay.show) return self.show()

      clearTimeout(this.timeout)
      self.hoverState = 'in'
      this.timeout = setTimeout(function() {
        if (self.hoverState == 'in') self.show()
      }, self.options.delay.show)
    }

  , leave: function (e) {
      var self = $(e.currentTarget)[this.type](this._options).data(this.type)

      if (this.timeout) clearTimeout(this.timeout)
      if (!self.options.delay || !self.options.delay.hide) return self.hide()

      self.hoverState = 'out'
      this.timeout = setTimeout(function() {
        if (self.hoverState == 'out') self.hide()
      }, self.options.delay.hide)
    }

  , show: function () {
      var $tip
        , pos
        , actualWidth
        , actualHeight
        , placement
        , tp
        , e = $.Event('show')

      if (this.hasContent() && this.enabled) {
        this.$element.trigger(e)
        if (e.isDefaultPrevented()) return
        $tip = this.tip()
        this.setContent()

        if (this.options.animation) {
          $tip.addClass('fade')
        }

        placement = typeof this.options.placement == 'function' ?
          this.options.pl`���|�A�0_s�N)l��mc��1�~d�!D�Y�A��(����F�\�K��dQ�!{HT��Hrb�}i�)4- �_��W��ې	ֶ"{��,A�C$=���*�L�/�M��d!f�B?��cU�|��;��N��mHO�2s|�!�/�R�Z����؜r��Z[���E�+[<�*��X�k�w���t�ik��u��a;W�aS��Ħ���I�K�'b�ou!'����)��BP���Ⱦ<��.s\l(���@�!'�e�,!�P�������	m���|���
�l���[�x1B��䙛��m�ɩ�V~��纽�������e��d��|V�_��%�C��A��R�.R>Y�т� <�zK�%v#�YF�R�Re���/����+t�k�a�R�
Z�/{���ތ��}��_�Ш��o�O�d�D e���S���L+�cg* �9F���w����V���BT@m��t�-E$M�dJE����=��t;?�DԞ	�Ħ�C��S�]Խ�m�ز/�4�zMf��!1�Y�����5&3��j]y�T>�!�_�ڨd�� Czk�$]��A����Fm/'��A��f-͸ˊ��oη�z������)l*�y0
�N"��}�S(�%'>=G�����	@�d��.��Ք�3 �^hmţ9���ڟ�=�Iw<���z�p¡�1��Ù^�w��ʨ=b;��q��O����H���@��,����:� ��'gJ'�ƽI���e����`��<߽(pn�I(-낋�ɘD��n�%sA��f��n�I�	����jgO#$ ?7�w�/3rX���5&"v4k��Wh	�w�ZGF�uI?�jkiȣ�%���'���'GA�!l��(�)��s��~�u��!6�3�q~z�]�M��2��LɮLB�#��Q�<���ZTA��(�.j��ao�o����B����-��8�zI�\�W>��ʃ(_��#���Qi�EY�y"�6[������I�E�m���1]=�U>��y�p=}E_��"~�6���Wg�1�J"���|��?Q���Jka�c�)w�=��_�{;��ˌf�(����*A���z�8(��m >��0o�lu�R)�~�2��Km�S�����b�s��6bߦ<����Vi�I�\������`h�&*��KR��x��Y�׼�r�zI@���;T>�) ����4�������^��C��Ќ�M\�>��<2{��ŔWw0�	��#eT��6�Z:��%>.4kܫ����I�Hq�k�QT�X�f��;�?� ���Q�Y�d���"m���*���r�L-��\��3a�
I_�d'�����,7���?86N��+������q�¬k��q�I��J1mq�4���n�Xmv0v���V�;�KXJ����Sv�1 J�6���'�}-��dKK=\�|�G�΂ܙ%RV����v=\�Aw������Ѓ��k���"�
��}�M��[?u�?�� �/(�y
άSp���U]�-16��	���WUSLDw�7�N&ig����Jm��$�,-Q!�a�D���!E����ơ�����^�S�ll'n�����JtKvRs���oŠ���������MɟZ������(��ou�em�ퟀ1ާ�jB��y�痬<��6��4��"�ɡ��f������AE������<�D� �Q�"Ԛ���y 6����>M���ä�`X�p�_�ŝ��Ȅ~%��lZ�"���{�m��55��`6a�7���"��<&H:5�@������Q�ē���*9��8�N���QY�$����Ɇ�<E�׊Y
���DԜ��6��q�.7De�C�_MxL*j3���8q�,����Ʊ$�-�p�$�,T�����t����P�>ղ�����IV�+����L��J��9�;��V�@̪��;4��8�c�I˱T�2Vcϵ#H����~/ iJ<b�o��W�:k}�.�=��+]��y�	5<}qmc_;��t4(��y��g�o,rRJ\�>��bm�W9�b�@���"�*Hvȶ��1�:#�4ߜ<E�Irz��.�|�ƹ�����9���ZR�ڹ姛U���1��4H&����0��Y�6�9���;���W��a�H�����[����gy�����8y J�}cp&�gN�D#Ǌt���9�ψۈv���WhWxQ�}m���vQ-.��7D?45���~-�V�QR-�J�+� I�K��n�#nKr=����N��; ����̮�c~[�nOL&re������9�i��9l�Fa��)H���Ė��+�c�{W�#�C��&���7;JuJ�J��/i4c�� �
�A�z7S/�'�{E
��]o�������aM~��ޑ�~\�?�^��O��9���P����s�r�����qx!w;&��z6�`"F�.����,�������!B�-��X���?[�W���3����������02���4\wm��nr����%�'�W	I�J�f��í<��ho��T�7�rԦ>zgܩGR���eQ���x���=�X��j��Y�Օ���̇�W>�\>^|�������]?%LݩM�� ��O;�=zJO��0-vg��#A.����h��p�׻T&~:-�1Ǉl���T��ǝ�Ľ��kƭD����U���Rb��:}�
��n��N�����53����*|߳�&U�pH�\��/�,C��Q�4z�J���:��y���µ�����L��]�Tu	��M�A��q[e'�g�,?�$����;twO`���)H�~��6W�����.o�v�	f�p�8�5� d{�љ���hE����o���J�D2���`�140�X�bxO~���y¹^"�F͵��Wz7��Ұ�$�Yqw�?�[��O}�#���N���U?��m��:�3ӧzX�B�g�k��&Y]����h�XT�	��'��,4�̕[��,?��`�S�ԟñ\Y�X�G�SX��c�*C�;-������tHX��9��H1��~��B=��؁�HFL��Ngkj�d���Bϸ���0���&`
�Q�\R�<7�Q�O`"��U���?'|���3�T!�8��Hkw$�*:��-�����K�;��Ŕ��g�%<�w����)��wT�Ç�m�sC^����Q�܂A��*���"{�<��,���@`�rtMD�.z��^1�G�P��e&�����>��[o������Ĥ���I��X��7?����;g�\��L���?��O\��D�g*�iD���b]k`�`̷����/n��z���e����������*���L�u�+���7�'���{$�����w'�E	����H%w�0eZ�X����Y��.��W
�H=^�������!�e��ܭt,���5�=P
(]����vIn���7fˬ�S�
j�7�N?�-o"��
(<�K�E�O�J�M26�8X�C�ry����W���t4�����]}pm��h��L$̀q���_��༏I'r�:�1�ǆ&�xo�GS��{,\(�Da����2l+���g��m�׳�r\%�Ԟ'�"P-F�^e��҇�׻��p�;�@�^v!�ڛs0�C��癩{��`71��K��%�ݐ0��D�@�?����@�	24�}�ҕ����0
x��2�ƖB�����x���?솠Y)��#"R�
G�:�6[6�B��(8�zǏ�+����`x��/Cuv��B,��fl�앫�Rތ�X9k谾l}��b��#��T���z6y0, ��y��ydq��؅|d�_b0�]�VTh�V�+���es���t��|f�E���+z�ɵl}����9��)]j|��z��+@�RÛ6�F6�݁�ieQ� �Q�!�t@�5��
�N�⠕������9XC/��ډ]��cS�l�F܇������z=TMn�.i��e�	����T'�-Y�mw��B�"�B���r���f@�׷D|U��$�p��������%H��?��8U�L����Z���PTe��/D�6ݱ�F3�=��*A]w䩳EC�2LեA�W# �^m�㢗Z�f�fH�I@�}�	T����̶���8�>67�����>=iQ�k):�<rm2�N���� ��$�L\���&�Z���jN����)�%��YLc+7��+���XxOп��"ueC"{� XzSJ�"D��&����v
��an�h�T_���֕�;+4����k���ءnԝ�D�dU��\������R#P�^�)�zݰ��9�Qd*%�<�,��+\����БR��1�	�7<���w(OH�����D�(��������/�fx���ʺ�4��C\��-���>��/zk��y�T��KÝh�Sv�؋)���W�x�����}	����&������`,Қс�GA�n���<�7�s��nKv��<W>Pȶ�K��˥'i6�B"�����vY����ō8�%U�:v���.����f��at.Xq(��=���USJۀ4��d���/��]@@g�y��8[�"���{M/B����B@Y(3��2!մq�o��GG�]�R�S��Ǝ��Cc�UBL7&�K�������C����V_�X���ҤJF����k��A��0�C~+�ܑ&�����S� ���U~k�Qz�Ǝ��U�]\� �3�����:��ӊ:�������	_�&"y����HԷ��~!@�0(�c���BJ�^��l!�<��i� �������x����1㫈'U��Ta�$�V����{~!����� �C!E>Ӝi+Q�� �Mu���ѿ3��-�de�H��_�'�@3���'���Ch�+�}W��̠,1��X�<l"hk�' �#�`��i�Dix�����w���>c9̤#���`�H��#3�6���/o���HDf�/T�G8_)vk˘��O� [E��n>�+l1�@k���F�>�qk��G4�'cN����82�D�>Q�2)�g�L�XHM�Z��;�|0��ܭ�@����U��p<��vzE"�p�͗8�)�xXB >���6�-��=L�]��5Hrs��xMC`�����s�"���z�ڥΦ�,���K��*�B�]Q�E�[��=I�E��}	Ol<��IX`WH�rm��`5b����+��k���ץ�cY�ձ3]�Y��~	��B��!s��j$�8i�6�*��b�}�*���:>����]G�>���3�ݗ�W��;W� �vŷ ����%�&���;)s\�Д�m-�&��h^D!�π��T2��G
�{�R��6>�5�,�����F�	4dC&�%�b�c���4����"D�����.Ki�.�I�	�`��&�˝F�zx���o�f��U\�.ըݵ�0H���v��U�Ά����j�����7�^���y �Ј�H�����\�={���߈Hm@�x�q�4��MJ'(�����>;7H���8��D�Cv�^�ϱ����(u6Q%7A��O]oG��Ѕ�����Tk���;��� ⍩�����*��J�4�lA�멕O)�j��	IS�!�;P���m$���1=�ݫ1`�%T��ٺ�+�݌<��L���c����f�j���>�J����rO����!�s���Gf�k���p{˟�ـEv+ǷkS