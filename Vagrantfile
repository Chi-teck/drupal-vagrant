VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|

  config.vm.hostname = "sandbox"
  
  # php 5.5
  config.vm.box = "trusty"
  config.vm.box_url = "http://cloud-images.ubuntu.com/vagrant/trusty/current/trusty-server-cloudimg-i386-vagrant-disk1.box"

  config.vm.network :private_network, ip: "192.168.56.50"

  # Uncomment this if you don't want synchronize folders with nfs server.
  # config.vm.synced_folder "/var/www", "remote_www"

  # Configure VirtualBox.
  config.vm.provider :virtualbox do |vb|  
    vb.name = "sandbox"
    vb.memory = 512
  end

  # Enable provisioning with Ansible.
  config.vm.provision "ansible" do |ansible|
    ansible.playbook = "playbook.yml"
    ansible.verbose = true
    ansible.sudo = true
  end
end
