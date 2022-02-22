<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>����� ��� ������� ��������</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
</head>
<body>
<div class="container technical-task">
    <div class="row">
        <h2 class="text-center">����������� ������� <br>��� SEO-������</h2>
        <form action="/mailsend_seo.php" method="post" id="tt-seo">

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-company-name" class="control-label">1.�������� �������� (���� ����)</label>
                    <input type="text" class="form-control" id="tt-company-name" placeholder="BomBear" name="tt-company-name">
                </div>
                <div class="form-group">
                    <label for="tt-contacts" class="control-label label-required">2.���������� ������ (�������, @mail, skype)</label>
                    <input type="text" class="form-control" id="tt-contacts" placeholder="+7 (000) 111-11-11; example@example.ru; yourlogin111" name="tt-contacts" required>
                </div>
                <div class="form-group">
                    <label for="tt-target-theme" class="control-label">3.�������� ������</label>
                    <input type="text" class="form-control" id="tt-target-theme" placeholder="����" name="tt-text-theme">
                </div>
                <div class="form-group">
                    <label for="tt-target-group" class="control-label">4.������� ��������� ������ (�������� ����������)</label>
                    <input type="text" class="form-control" id="tt-target-group" placeholder="������� 25-35 ��� � �����������" name="tt-target-group">
                </div>
                <div class="form-group">
                    <label for="tt-symbol-number" class="control-label">5.���������� �������� (��������)</label>
                    <input type="number" class="form-control" id="tt-symbol-number" placeholder="2000-2500" name="tt-symbol-number">
                </div>
                <div class="radio">
                    <label class="control-label radio-label label-required" for="tt-text-compact-yes">6.�������� �� ���������� ��� ���������� ������ ������?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-yes" value="option1">��
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-no" value="option2">���
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-important-parts" class="control-label label-required">7.�������, ������� ����������� ������ ���� �������� � ���������
                    </label>
                    <textarea placeholder="������, ��������, ����������" class="form-control" id="tt-important-parts" name="tt-important-parts" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-text-like" class="control-label">8.������� ������ �� ������, ������� ��� �������� � ������� ����� ������������� � �������� ������� �������� ���������
                    </label>
                    <input type="text" class="form-control" id="tt-text-like" placeholder="http://text.bombear.ru" name="tt-text-like">
                </div>
                <div class="form-group">
                    <label for="tt-keywords" class="control-label">9.������� ������ �������� ����</label>
                    <textarea placeholder="�� 12-00 ������� 01.01.16�" class="form-control" name="tt-keywords" id="tt-keywords"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-words-excluded" class="control-label">10.�����-���������� (��������, ���� �����, ������� �� ����� ����������� � ������)</label>
                    <textarea placeholder="���������,  ����������, ���������" class="form-control" id="tt-words-excluded" name="tt-words-excluded"></textarea>
                </div>
            </div>

            <!-- second row -->

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-word-repeat" class="control-label">11.������ ���������� ��������� ������� ����� (����� �������� ���������� �����������)
                    </label>
                    <textarea placeholder="���������� BMW (3-4 ���������)" class="form-control" id="tt-word-repeat" name="tt-word-repeat" rows="2"></textarea>
                </div>
                <div class="radio">
                    <label for="tt-word-trans" class="control-label radio-label">12.��������� �� ���������� (������, ������������, ��������������� ���������)</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-word-trans" id="tt-word-trans-yes" value="Yes">��
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-word-trans" id="tt-word-trans-no" value="No">���
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-text-place" class="control-label">13.������ �� ����� ���������� ������	 (������ �� ����, ����� � �. �.)</label>
                    <input type="text" class="form-control" id="tt-text-place" placeholder="http://text.bombear.ru" name="tt-text-place">
                </div>
                <div class="form-group">
                    <label for="tt-text-style" class="control-label">14.����� ���������</label>
                    <input type="text" class="form-control" id="tt-text-style" placeholder="�������, ���������, �  ���������� �����, ��������������, ���������" name="tt-text-style">
                </div>
                <div class="radio">
                    <label for="tt-headers-yes" class="control-label radio-label">15.����� �� ������������?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-yes" value="Yes">��
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-no" value="No">���
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-deadline" class="control-label label-required">16.��������� ������������ ������ ���������� ���������</label>
                    <textarea placeholder="�� 12-00 ������� 01.01.16�" class="form-control" name="tt-deadline" rows="2" id="tt-deadline" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-additional" class="control-label">17.�������������� ���������</label>
                    <textarea placeholder="�������������� ���������" class="form-control" id="tt-additional" name="tt-additional"></textarea>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="hidden" value="����������� ������� ��� SEO-������" name="cat">
                    <input type="file" value="���������� ����">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="���������" name="submit-copy">
                </div>
            </div>
        </form>
    </div>
</div>
    <div class="row">
        <h2 class="text-center">����� ��� ������� ��������</h2>

        <form action="/mailsend_main_page.php" method="post" id="tt-main-page">

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-company-name" class="control-label">1.�������� �������� (���� ����)</label>
                    <input type="text" class="form-control" id="tt-company-name" placeholder="BomBear" name="tt-company-name">
                </div>
                <div class="form-group">
                    <label for="tt-contacts" class="control-label label-required">2.���������� ������ (�������, @mail, skype)</label>
                    <input type="text" class="form-control" id="tt-contacts" placeholder="+7 (000) 111-11-11; example@example.ru; yourlogin111" name="tt-contacts" required>
                </div>
                <div class="form-group">
                    <label for="tt-target-theme" class="control-label">3.�������� ������</label>
                    <input type="text" class="form-control" id="tt-target-theme" placeholder="����" name="tt-text-theme">
                </div>
                <div class="form-group">
                    <label for="tt-message" class="control-label label-required">4.������� �����, ������� ������ ������������� �������� (�������� ��������� �������)
            </label>
                    <textarea placeholder="�������� ��������, ����������� ��������, ����� ����� ������ ����
" class="form-control" id="tt-message" name="tt-message" rows="2">
            </textarea>
                </div>
                <div class="form-group">
            <label for="tt-target-group" class="control-label">5.������� ��������� ������ (�������� ����������)</label>
            <input type="text" class="form-control" id="tt-target-group" placeholder="������� 25-35 ��� � �����������" name="tt-target-group">
        </div>
                <div class="form-group">
            <label for="tt-symbol-number" class="control-label">6.���������� �������� (��������)</label>
            <input type="number" class="form-control" id="tt-symbol-number" placeholder="2000-2500" name="tt-symbol-number">
        </div>
                <div class="radio">
            <label class="control-label radio-label label-required" for="tt-text-compact-yes">7.�������� �� ���������� ��� ���������� ������ ������?</label><br>
            <label class="radio-inline">
                <input type="radio" name="tt-text-compact" id="tt-text-compact-yes" value="option1">��
            </label>
            <label class="radio-inline">
                <input type="radio" name="tt-text-compact" id="tt-text-compact-no" value="option2">���
            </label>
        </div>
                <div class="form-group">
            <label for="tt-important-parts" class="control-label label-required">8.�������, ������� ����������� ������ ���� �������� � ���������
            </label>
            <textarea placeholder="������, ��������, ����������" class="form-control" id="tt-important-parts" name="tt-important-parts" rows="2" required></textarea>
        </div>
                <div class="form-group">
            <label for="tt-�xcluded-words" class="control-label label-required">9.���� ����� �� ������ ���� � ������?
            </label>
            <textarea placeholder="����-���������, ����" class="form-control" id="tt-�xcluded-words" name="tt-�xcluded-words" rows="2" required></textarea>
        </div>
                <div class="form-group">
            <label for="tt-�xcluded-words" class="control-label label-required">10.���� �� � ��� �����-�� �������� ������������, ������� �������� ��� ����� ������?
            </label>
            <textarea placeholder="���������� ������" class="form-control" id="tt-�xcluded-words" name="tt-�xcluded-words" rows="2" required></textarea>
        </div>
            </div>

    <!-- second row -->

            <div class="col-sm-6 col-xs-12">
        <div class="form-group">
            <label for="tt-details" class="control-label label-required">11.�������� �����, ����� ���� ���������������� �����, ����� � ����������, ������� ����� ������� ���������������� ������ ��������� (�������������� ���, ���� ����� ����������������, �� ���������� ������). ��� ������ �����.
            </label>
            <textarea placeholder="��� 50 ��� �� �����, ������ ����� �� 30 ������������ �� ���������� �� ������������������� � �.�." class="form-control" id="tt-details" name="tt-details" rows="2" required></textarea>
        </div>
        <div class="form-group">
            <label for="tt-words-excluded" class="control-label">12.�����-���������� (��������, ���� �����, ������� �� ����� ����������� � ������)</label>
            <textarea placeholder="���������,  ����������, ���������" class="form-control" id="tt-words-excluded" name="tt-words-excluded"></textarea>
        </div>
        <div class="form-group">
            <label for="tt-text-style" class="control-label">13.����� ���������</label>
            <input type="text" class="form-control" id="tt-text-style" placeholder="�������, ���������, �  ���������� �����, ��������������, ���������" name="tt-text-style">
        </div>
        <div class="radio">
            <label for="tt-headers-yes" class="control-label radio-label">14.����� �� ������������?</label><br>
            <label class="radio-inline">
                <input type="radio" name="tt-headers" id="tt-headers-yes" value="Yes">��
            </label>
            <label class="radio-inline">
                <input type="radio" name="tt-headers" id="tt-headers-no" value="No">���
            </label>
        </div>
        <div class="form-group">
            <label for="tt-text-idea" class="control-label">15.����� ���� �� ������� ������� �� ����������� � ������� ������?</label>
            <textarea placeholder="���������������� �������, ���������� ���" class="form-control" id="tt-text-idea" name="tt-text-idea" rows="2"></textarea>
        </div>
        <div class="form-group">
            <label for="tt-deadline" class="control-label label-required">15.��������� ������������ ������ ���������� ���������</label>
            <textarea placeholder="�� 12-00 ������� 01.01.16�" class="form-control" name="tt-deadline" rows="2" id="tt-deadline" required></textarea>
        </div>
        <div class="form-group">
            <label for="tt-additional" class="control-label">16.�������������� ���������</label>
            <textarea placeholder="�������������� ���������" class="form-control" id="tt-additional" name="tt-additional"></textarea>
        </div>
    </div>
            <div class="col-sm-12 col-xs-12">
        <div class="form-group">
            <input type="hidden" value="����� ��� ������� ��������" name="cat">
            <input type="file" value="���������� ����">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-primary" value="���������" name="submit-copy">
        </div>
    </div>
        </form>
    </div>
</div>
<div class="container technical-task">
    <div class="row">
        <h2 class="text-center">����������� ������� <br>��� SEO-������</h2>
        <form action="/mailsend_seo.php" method="post" id="tt-seo">

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-company-name" class="control-label">1.�������� �������� (���� ����)</label>
                    <input type="text" class="form-control" id="tt-company-name" placeholder="BomBear" name="tt-company-name">
                </div>
                <div class="form-group">
                    <label for="tt-contacts" class="control-label label-required">2.���������� ������ (�������, @mail, skype)</label>
                    <input type="text" class="form-control" id="tt-contacts" placeholder="+7 (000) 111-11-11; example@example.ru; yourlogin111" name="tt-contacts" required>
                </div>
                <div class="form-group">
                    <label for="tt-target-theme" class="control-label">3.�������� ������</label>
                    <input type="text" class="form-control" id="tt-target-theme" placeholder="����" name="tt-text-theme">
                </div>
                <div class="form-group">
                    <label for="tt-target-group" class="control-label">4.������� ��������� ������ (�������� ����������)</label>
                    <input type="text" class="form-control" id="tt-target-group" placeholder="������� 25-35 ��� � �����������" name="tt-target-group">
                </div>
                <div class="form-group">
                    <label for="tt-symbol-number" class="control-label">5.���������� �������� (��������)</label>
                    <input type="number" class="form-control" id="tt-symbol-number" placeholder="2000-2500" name="tt-symbol-number">
                </div>
                <div class="radio">
                    <label class="control-label radio-label label-required" for="tt-text-compact-yes">6.�������� �� ���������� ��� ���������� ������ ������?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-yes" value="option1">��
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-text-compact" id="tt-text-compact-no" value="option2">���
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-important-parts" class="control-label label-required">7.�������, ������� ����������� ������ ���� �������� � ���������
                    </label>
                    <textarea placeholder="������, ��������, ����������" class="form-control" id="tt-important-parts" name="tt-important-parts" rows="2" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-text-like" class="control-label">8.������� ������ �� ������, ������� ��� �������� � ������� ����� ������������� � �������� ������� �������� ���������
                    </label>
                    <input type="text" class="form-control" id="tt-text-like" placeholder="http://text.bombear.ru" name="tt-text-like">
                </div>
                <div class="form-group">
                    <label for="tt-keywords" class="control-label">9.������� ������ �������� ����</label>
                    <textarea placeholder="�� 12-00 ������� 01.01.16�" class="form-control" name="tt-keywords" id="tt-keywords"></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-words-excluded" class="control-label">10.�����-���������� (��������, ���� �����, ������� �� ����� ����������� � ������)</label>
                    <textarea placeholder="���������,  ����������, ���������" class="form-control" id="tt-words-excluded" name="tt-words-excluded"></textarea>
                </div>
            </div>

            <!-- second row -->

            <div class="col-sm-6 col-xs-12">
                <div class="form-group">
                    <label for="tt-word-repeat" class="control-label">11.������ ���������� ��������� ������� ����� (����� �������� ���������� �����������)
                    </label>
                    <textarea placeholder="���������� BMW (3-4 ���������)" class="form-control" id="tt-word-repeat" name="tt-word-repeat" rows="2"></textarea>
                </div>
                <div class="radio">
                    <label for="tt-word-trans" class="control-label radio-label">12.��������� �� ���������� (������, ������������, ��������������� ���������)</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-word-trans" id="tt-word-trans-yes" value="Yes">��
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-word-trans" id="tt-word-trans-no" value="No">���
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-text-place" class="control-label">13.������ �� ����� ���������� ������	 (������ �� ����, ����� � �. �.)</label>
                    <input type="text" class="form-control" id="tt-text-place" placeholder="http://text.bombear.ru" name="tt-text-place">
                </div>
                <div class="form-group">
                    <label for="tt-text-style" class="control-label">14.����� ���������</label>
                    <input type="text" class="form-control" id="tt-text-style" placeholder="�������, ���������, �  ���������� �����, ��������������, ���������" name="tt-text-style">
                </div>
                <div class="radio">
                    <label for="tt-headers-yes" class="control-label radio-label">15.����� �� ������������?</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-yes" value="Yes">��
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="tt-headers" id="tt-headers-no" value="No">���
                    </label>
                </div>
                <div class="form-group">
                    <label for="tt-deadline" class="control-label label-required">16.��������� ������������ ������ ���������� ���������</label>
                    <textarea placeholder="�� 12-00 ������� 01.01.16�" class="form-control" name="tt-deadline" rows="2" id="tt-deadline" required></textarea>
                </div>
                <div class="form-group">
                    <label for="tt-additional" class="control-label">17.�������������� ���������</label>
                    <textarea placeholder="�������������� ���������" class="form-control" id="tt-additional" name="tt-additional"></textarea>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12">
                <div class="form-group">
                    <input type="hidden" value="����������� ������� ��� SEO-������" name="cat">
                    <input type="file" value="���������� ����">
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-primary" value="���������" name="submit-copy">
                </div>
            </div>
        </form>
    </div>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="plugin/Lava-Lamp-master/js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="plugin/Lava-Lamp-master/js/jquery.lavalamp.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/typed.min.js"></script>
<script src="js/send.js"></script>
<script src="js/plugins-scroll.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/script.js"></script>
</body>
</html>
