%define		php_min_version 5.2.4
%define		shortname	smarty
%include	/usr/lib/rpm/macros.php
Summary:	Use smarty template engine in CodeIgniter
Name:		CodeIgniter-lib-%{shortname}
Version:	2
Release:	0.1
License:	GPL
Group:		Development/Languages/PHP
Source0:	Smarty_tpl.php
Requires:	CodeIgniter >= 2.0.0
Requires:	php-Smarty >= 3.1
Requires:	php-common >= 4:%{php_min_version}
BuildArch:	noarch
BuildRoot:	%{tmpdir}/%{name}-%{version}-root-%(id -u -n)

%define		_appdir		%{_datadir}/CodeIgniter
%define		_noautoreq	pear(Smarty/Smarty.class.php)

%description
Use smarty template engine in CodeIgniter.

%prep

%install
rm -rf $RPM_BUILD_ROOT
install -d $RPM_BUILD_ROOT%{_appdir}/system/libraries
cp -p %{SOURCE0} $RPM_BUILD_ROOT%{_appdir}/system/libraries

%clean
rm -rf $RPM_BUILD_ROOT

%files
%defattr(644,root,root,755)
%{_appdir}/system/libraries/Smarty_tpl.php
